<?php

namespace App\Http\Controllers;

use App\Society;
use App\Student;
use App\Teacher;
use App\StudentSociety;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class SocietyController extends Controller
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

    public function getAddSociety()
    {
        $teacher = Teacher::all()->pluck('first_name', 'id');

        return view('society.Add_new_society', [
            'teacher' => $teacher,
        ]);

    }

    public function postAddSociety(Request $request)
    {
        //validation
        $this->validate($request, [
            'so_id' => 'required|unique:societies',
            'society_name' => 'required | max:100 | string',
            'vision' => 'required | max:255 | string',
            'mission' => 'required | max:255 | string',
            'tr_id_mic' => 'required',
            'tr_id_ast_mic' => 'required',
            'st_id_president' => 'required',
            'st_id_secretary' => 'required',
            'st_id_treasurer' => 'required',
            'formed_date' => 'required'
        ]);
        //savind in db
        $tr=$request->tr_id_mic;
        $mic_tr=$request->tr_id_ast_mic;
        
        $tr_id=Teacher::where('tr_id',$tr)->select('tr_id')->count();
        $tr_id_ast=Teacher::where('tr_id',$mic_tr)->select('tr_id')->count();
        
        if (($request->isMethod('post')) && $tr_id==1 && $tr_id_ast==1  ) {

        $society = Society::create($request->all());

        //redirect page
        Session::flash('success', 'The society was successfully saved!!');
        return view('society.Manage_society_members', ['society'=>$society]);
    }
    else {
            return redirect('addsociety');
            
    }
    }
    
    public function postSocietyMember(Request $request)
    {
        //validation
        //
        //savind in db
         $societymems = explode(',', $request->st_id);
         
    //   $sportmem = StudentSport::create($request->all());
          foreach ($societymems as $societymem) {
        StudentSociety::create([
           'student_id'=>$societymem,
           'society_id'=>$request->society_id,
        ]);
          }
         
                    
        return redirect('addsociety');
    }

    public function AddSocietyMember()
    {
        return view('society.Manage_society_members');
    }


    public function getName($id)
    {
        $name = Teacher::where('tr_id', $id)->first();

        if ($name == null) {
            echo "Enter Valid ID";
        } else {
            echo $name->first_name . " " . $name->last_name;
        }
    }

    public function getNameStudent($id)
    {
        $name = Student::where('st_id', $id)->first();

        if ($name == null) {
            echo "Enter Valid ID";
        } else {
            echo $name->first_name . " " . $name->last_name;
        }
    }


    public function searchRegisteredSociety()
    {
        $societies = Society::all();

        return view('society.So_search', ['societies' => $societies]);
    }

    public function getMemberList($id)
    {

        $society = Society::where('id', $id)->first(); //gives only one object        

        if (empty($society)) {
            return abort(404);
        }

        return view('society.So_member_list', compact('society'));

    }


    public function viewSociety($id)
    {
        $teacher = Teacher::all()->pluck('first_name', 'id');
        $society = Society::with(['mic', 'ast_mic'])->where('id', $id)->first();

        if (empty($society)) {
            return abort(404);
        }

        return view('society.view_society', [
            'society' => $society,
            'teacher' => $teacher,
        ]);
    }

    public function editViewSociety($id, $mic, $ast_mic, $pres, $sec, $tres)
    {
        $mic=$mic;
        $ast_mic=$ast_mic;
        $pres=$pres;
        $sec=$sec;
        $tres=$tres;
        
       
        
        $teacher = Teacher::all()->pluck('first_name', 'id');
        $society = Society::with(['mic', 'ast_mic'])->where('id', $id)->first();
        
        $mic_name=Teacher::where('tr_id', $mic)->first();
        $ast_name=Teacher::where('tr_id', $ast_mic)->first();
        $pres_name=Student::where('st_id', $pres)->first();
        $sec_name=Student::where('st_id', $sec)->first();
        $tres_name=Student::where('st_id', $tres)->first();
        
       // dd($pres_name);
        
        if (empty($society)) {
            return abort(404);
        }

        return view('society.edit_new_society', [
            'society' => $society,
            'teacher' => $teacher,
            'mic_name'=> $mic_name,
            'ast_name'=>$ast_name,
            'pres_name'=>$pres_name,
            'sec_name'=>$sec_name,
            'tres_name'=>$tres_name,
            
        ]);
    }

    public function postEditSociety(Request $request)
    {
         //validation
        $this->validate($request, [
            'so_id' => 'required',
            'society_name' => 'required | max:100 | string',
            'vision' => 'required | max:255 | string',
            'mission' => 'required | max:255 | string',
            'tr_id_mic' => 'required',
            'tr_id_ast_mic' => 'required',
            'st_id_president' => 'required',
            'st_id_secretary' => 'required',
            'st_id_treasurer' => 'required',
            'formed_date' => 'required'
        ]);
                
        // db connection
        $societyEdit = Society::where('id', $request->id)->first();

        
        if (empty($societyEdit)) {
            return abort(404);
        }

        $societyEdit->so_id = $request->so_id;
        $societyEdit->society_name = $request->society_name;
        $societyEdit->vision = $request->vision;
        $societyEdit->mission = $request->mission;
        $societyEdit->tr_id_mic = $request->tr_id_mic;
        $societyEdit->tr_id_ast_mic = $request->tr_id_mic;
        $societyEdit->st_id_president = $request->st_id_president;
        $societyEdit->st_id_secretary = $request->st_id_secretary;
        $societyEdit->st_id_treasurer = $request->st_id_treasurer;
        $societyEdit->formed_date = $request->formed_date;
        $societyEdit->save();

        Session::flash('success', 'The society was successfully edited!!');

        return redirect('searchso');
    }

    public function deleteSociety($id)
    {
        $society = Society::find($id);

        if (empty($society)) {
            return abort(404);
        }

        $society->delete();

        Session::flash('success', 'The society was successfully Deleted!!');
        return redirect()->back();
    }
    
    public function editSocietyMember($id)
    {
        $society_id=$id;
        $society=Society::find($society_id);
        $so_id=$society->so_id;
        $so_names=Society::where('so_id',$so_id)->select('society_name')->get();
        
        if(!($society==null)){
            $st_ids = DB::table('student_societies')->where('society_id', $society->so_id)->select('student_id')->get();
           
            $array = json_decode(json_encode($st_ids), True);
                             
            $students=Student::whereIn('st_id',$array )->get();
            
           //dd($student);
            //$st_ids = StudentSport::where('sport_id', '$sport_id' )->get();
            return view('society.Edit_society_members',['students'=>$students, 'so_id'=>$so_id,], compact('so_names'));
        }
        else{
          // return redirect to error page 
             return abort(404);
        }
    }
        
        public function editPostSocietyMember(Request $request)
   {
        $so_id=$request->id;
        //validation
            
       
        //savind in db
        $societymems = explode(',', $request->st_id);


        //   $sportmem = StudentSport::create($request->all());
        foreach ($societymems as $societymem) {
            StudentSociety::create([
                'student_id' => $societymem,
                'society_id' => $request->so_id,
            ]);
        }

        return redirect('addsociety');
    }
       
        
    }


