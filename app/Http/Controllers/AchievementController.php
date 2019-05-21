<?php

namespace App\Http\Controllers;

use App\Achievement;
use App\Activity;
use App\StudentAchievement;
use Illuminate\Http\Request;
use Session;

class AchievementController extends Controller
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

    public function viewActivity()
    {
        $activities = Activity::all();

        return view('common.Add_achievement_seperate', ['activities' => $activities]);
    }

    public function addAchievement($id)
    {
        $activity = Activity::where('id', $id)->first();

        if (empty($activity)) {
            return abort(404);
        }

        return view('common.Add_achievement', compact('activity'));
    }

    public function viewAchievementSeperate()
    {
        $sachieveents = Achievement::all();

        return view('common.Add_st_achievement_seperate', ['achievements' => $sachieveents]);
    }

    public function postAchievement(Request $request)
    {
        //validation
        $this->validate($request, [
            'date' => 'before:tomorrow',
        ]);

        //save in db

        $achievement = Achievement::create($request->all());

        //redirect page
        Session::flash('success', 'The achievement was successfully saved!!');
        //return redirect()->back()->with('message', 'IT WORKS!');
        return view('common.Manage_student_achievement', ['achievement' => $achievement]);
    }

    public function searchRegisteredAchievement(Request $request)
    {

        $req = collect($request->all());
        if ($req->isNotEmpty()) {
            foreach ($req as $key => $value) {
                switch ($key) {
                    case 'fromToDate':
                        $fromToDate = explode(' - ', $value);

                        $achievements  = Achievement::whereDate('created_at', '>=', date('Y-m-d', strtotime($fromToDate[0])))
                            ->whereDate('created_at', '<=', date('Y-m-d', strtotime($fromToDate[1])))
                            ->get();
                        break;
                }
            }
        } else {
            $achievements = Achievement::all();
        }

        return view('common.search_achievement', [
            'achievements' => $achievements,
            'request' => $request
        ]);
    }

    public function viewAchievement($id)
    {
        $achievements = Achievement::where('id', $id)->first(); //gives only one object

        if (empty($achievements)) {
            return abort(404);
        }

        return view('common.View_achievement', compact('achievements'));

    }

    public function deleteAchievement($id)
    {
        $achievement = Achievement::find($id);
        if (empty($achievement)) {
            return abort(404);
        }

        $achievement->delete();
        Session::flash('success', 'The achievement was successfully Deleted!!');

        return redirect()->back();
    }

    public function postStAchievement(Request $request)
    {

        // do the validations here

        $students = explode(',', $request->st_id);
        //sends the vlues sent as an array

        // dd($students);

        foreach ($students as $student) {
            StudentAchievement::create([
                'ach_id' => $request->ach_id,
                'st_id' => $student,
                'mark' => $request->mark,
            ]);
        }
        
        // add the return or success msg
        return redirect('addstachievement');

    }
    
    public function addStAchievement($id){
        $achievement = Achievement::where('id', $id)->first();
        
      //$activity = Activity::where('id', $id)->first();
        return view('common.Manage_student_achievement', ['achievement' => $achievement]);
    }

     public function searchAchievementCommon()
    {                
        
            $achievements = Achievement::all();
            
            
        
        return view('common.search_achievement_common',['achievements'=>$achievements]);
    }

}