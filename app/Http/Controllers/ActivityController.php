<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Society;
use App\Sport;
use App\ActivityType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;


class ActivityController extends Controller
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
    public function index()
    {
        return view('home');
    }

    public function addActivity()
    {
        $societies=Society::select('so_id','society_name')->get();
        $sports=Sport::select('sp_id','sport_name')->get();
        
        
        
        $types=ActivityType::all();
        return view('common.Add_activity',['types'=>$types, 'societies'=>$societies, 'sports'=>$sports  ]);
        
  
    }

    public function postActivity(Request $request)
    {
        //validation
         $this->validate($request, [
            'activity_name' => 'required',
            'date'=>'required',
            'venue'=>'required',
            'club'=>'required',
            'club_id'=>'required',
            'date'=>'required',
            'venue'=>'required',
        ]);
        //save in db
        //   $activity =  Activity::create($request->all());
        //redirect page
        $data = ($request->all()); //converts to an array
        if ($request->club == 'society')  {
            $activity = Activity::create([
                'activity_name' => $request->activity_name,
                'description' => $request->description,
                'type' => $request->type,
                'so_id' => $request->club_id,
                'venue' => $request->venue,
                'date' => $request->date,
            ]);
            
            }
            
         else {
            $activity = Activity::create([
                'activity_name' => $request->activity_name,
                'description' => $request->description,
                'type' => $request->type,
                'sp_id' => $request->club_id,
                'venue' => $request->venue,
                'date' => $request->date,
            ]);
        }
        
        Session::flash('success', 'The activity was successfully saved!!');
        
        return view('common.Add_achievement', ['activity' => $activity]);


    }

    public function searchActivity(Request $request)
    {
                
        $req = collect($request->all());
        if ($req->isNotEmpty()) {
            foreach ($req as $key => $value) {
                switch ($key) {
                    case 'fromToDate':
                        $fromToDate = explode(' - ',$value);

                        $activities = Activity::whereDate('date','>=',date('Y-m-d',strtotime($fromToDate[0])))
                            ->whereDate('date','<=',date('Y-m-d',strtotime($fromToDate[1])))
                            ->get();
                        break;
                }
            }
            
            
        } else {
            $activities = Activity::all();
        }
    
        
        return view('common.activity_search', [
            'activities' => $activities,
            'request' => $request
                
        ]);
    }

    public function viewActivity($id)
    {
        $activity = Activity::where('id', $id)->first(); //gives only one object

        if (empty($activity)) {
            return abort(404);
        }

        return view('common.view_activity', compact('activity'));
    }

    public function deleteActivity($id)
    {
        $activity = Activity::find($id);
        if (empty($activity)) {
            return abort(404);
        }
        $activity->delete();
        Session::flash('success', 'Activity Successfully Deleted!');
        return redirect()->back();
    }
    
    public function searchActivityCommon()
    {                
        
            $activities = Activity::all();
            
            $result=DB::table('activities')
                    ->leftJoin('activity_types', 'activities.type', '=', 'activity_types.id')
                    ->leftJoin('societies', 'activities.so_id', '=', 'societies.so_id')
                    ->leftJoin('sports','activities.sp_id','=','sports.sp_id')
                    ->select('activities.id','activities.activity_name','activity_types.type_name','societies.society_name','sports.sport_name as sport_name','activities.date')
                    ->get();
           // var_dump($result);
        
        return view('common.activity_search_common', [
            'activities' => $activities, 'results'=>$result,
                
       ]);
    }


}

