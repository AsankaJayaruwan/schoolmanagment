<?php

namespace App\Http\Controllers;

use App\Student;
use App\Teacher;
use App\Sport;
use App\Society;
use App\Activity;
use App\Achievement;
use DB;

class HomeController extends Controller
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

    public function student($year)
    {

        //return view("student",['all'=>\App\Student::find('year'=>$year)]);
    }
    
    public function getDashboard()
    {
        $student_count=Student::all()->count();
        $teacher_count=Teacher::all()->count();
        $society_count=Society::all()->count();
        $sport_count=Sport::all()->count();
        $activity_count=Activity::all()->count();
        $achievement_count=Achievement::all()->count();
        
        
        $recent_activity=DB::table('activities')->whereMonth('date', '12')->whereYear('date', '2017')->take(6)->get(); //->whereYear() take to cut the no of rows
                    
        return view('dashboard',compact('student_count','teacher_count','society_count','sport_count','activity_count','achievement_count'),['recent_activities'=>$recent_activity]);
    }
}
