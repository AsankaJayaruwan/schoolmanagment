<?php

namespace App\Http\Controllers;

use App\Sport;
use App\Student;
use App\StudentSport;
use App\Teacher;
use App\Coach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class SportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('home');
    }

    public function addSport()
    {
        return view('sport.Add_new_sport');
    }

    public function postSport(Request $request)
    {
        //validation
        $this->validate($request, [
            'sp_id' => 'required|unique:sports',
            'sport_name'=>'required',
            'tr_id_mic'=>'required',
            'tr_id_ast_mic'=>'required',  
            'formed_date' => 'required'
        ]);

        //savind in db
        $tr=$request->tr_id_mic;
        $mic_tr=$request->tr_id_ast_mic;
        
        $tr_id=Teacher::where('tr_id',$tr)->select('tr_id')->count();
        $tr_id_ast=Teacher::where('tr_id',$mic_tr)->select('tr_id')->count();
        
        if (($request->isMethod('post')) && $tr_id==1 && $tr_id_ast==1  ) {
            $sport = Sport::create($request->all());

            //redirect page
            Session::flash('success', 'The sport was successfully saved!!');
            return view('sport.Manage_sport_members', ['sport' => $sport]);
        } else {
            Session::flash('success', 'The sport was successfully saved!!');
            return redirect('addsport');
            return view('sport.Manage_sport_members', [
                'sport' => null
            ]);
        }
    }

    public function addSportMember(Request $request, $id = null)
    {
        return [$request->all(), $id];
    }

    public function postSportMember(Request $request)
    {
        //validation
            
       
        //savind in db
        $sportmems = explode(',', $request->st_id);


        //   $sportmem = StudentSport::create($request->all());
        foreach ($sportmems as $sportmem) {
            StudentSport::create([
                'st_id' => $sportmem,
                'sp_id' => $request->sp_id,
            ]);
        }

        return redirect('addsport');
    }


    public function getName($id)
    {
        $name = Teacher::where('tr_id', $id)->first();

        if ($name == null) {
            echo "Enter Valid ID";
        } else {
            echo $name->name();
        }
    }

    public function getNameCoach($id)
    {
        $name = Coach::where('coach_id', $id)->first();

        if ($name == null) {
            echo "Enter Valid ID";
        } else {
            echo $name->first_name . " " . $name->last_name;
        }
    }

    public function addStudentAchievement()
    {
        return view('sport.Manage_student_sport_achievement');
    }

    public function searchRegisteredSport()
    {
        $sports = Sport::all();

        return view('sport.Sp_search', ['sports' => $sports]);
    }

    public function viewSport($id)
    {
        $sport = Sport::where('id', $id)->first(); //gives only one object

        return view('sport.view_sport', compact('sport')); //sport is the $sport variable

    }

    public function editViewSport($id)
    {
        $sport = Sport::where('id', $id)->first(); //gives only one object

        return view('sport.edit_sport', compact('sport')); //sport is the $sport variable
    }

    public function editSport(Request $request)
    {   
        $this->validate($request, [
            'sp_id' => 'required',
            'sport_name' => 'required | max:10 | string',
            'vision' => 'required | max:255 | string',
            'mission' => 'required | max:255 | string',
            'tr_id_mic' => 'required',
            'tr_id_ast_mic' => 'required',
            'formed_date' => 'required'
        ]);
        
        $editSport = Sport::where('id', $request->id)->first();
        
        if (empty($editSport)) {
            return abort(404);
        }
        

        $editSport->sp_id = $request->sp_id;
        $editSport->sport_name = $request->sport_name;
        $editSport->vision = $request->vision;
        $editSport->mission = $request->mission;
        $editSport->tr_id_mic = $request->tr_id_mic;
        $editSport->tr_id_ast_mic = $request->tr_id_ast_mic;
        $editSport->coach_id = $request->coach_id;
        $editSport->formed_date = $request->formed_date;
        $editSport->save();

        
         
       Session::flash('success', 'The sport was successfully edited!!');
       return redirect('searchsp');
       

    }

    
    public function editSportMemberxxx(Request $request, $id)
    {
        
        $sports = StudentSport::where('id',$request )->first();
       // $sports=StudentSport::all();
      
        Session::flash('success', 'Sport Members were edited Successfully!'); 
        return view('sport.Edit_sport_members',['sports'=>$sports]);
        
    }
    
    public function editSportMember($id)
    {
        $sport_id=$id;
        $sport=Sport::find($sport_id);
        $sp_id=$sport->sp_id;
        $sp_names=Sport::where('sp_id',$sp_id)->select('sport_name')->get();
        
        if(!($sport==null)){
            $st_ids = DB::table('student_sports')->where('sp_id', $sport->sp_id)->select('st_id')->get();
           
            $array = json_decode(json_encode($st_ids), True);
                             
            $students=Student::whereIn('st_id',$array )->get();
            
           //dd($student);
            //$st_ids = StudentSport::where('sport_id', '$sport_id' )->get();
            return view('sport.Edit_sport_members',['students'=>$students, 'sp_id'=>$sp_id,], compact('sp_names'));
        }
        else{
          // return redirect to error page 
             return abort(404);
        }
       
        
    }
    
     
    public function editPostSportMember(Request $request)
   {
        $sp_id=$request->id;
        //validation
            
       
        //savind in db
        $sportmems = explode(',', $request->st_id);


        //   $sportmem = StudentSport::create($request->all());
        foreach ($sportmems as $sportmem) {
            StudentSport::create([
                'st_id' => $sportmem,
                'sp_id' => $request->sp_id,
            ]);
        }
        
        Session::flash('success', 'Sport Members were edited Successfully!'); 
        return redirect('addsport');
    }

    public function deleteSociety($id)
    {
        Society::find($id)->delete();
        Session::flash('success', 'Society Deleted Successfully!');
        return redirect()->back();
    }

    public function deleteSport($id)
    {
        Sport::find($id)->delete();
        Session::flash('success', 'Sport Deleted Successfully!');
        return redirect()->back();
    }
    
    public function deleteMember($st_id)
    {   
      
        $st_id=$st_id;
        //dd($st_id);
    //    $Delst_id=$st_id;
     //   $st_id=$request->st_id;
       // dd($Delst_id);
       StudentSport::where('st_id', $st_id)->delete();
       // Session::flash('success', 'Student Deleted Successfully!');
       // return redirect()->back();
    }


}