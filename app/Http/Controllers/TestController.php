<?php

namespace App\Http\Controllers;

use App\Event;
use Session;
use App\Student;
use App\Sport;
use App\Society;
use App\StudentSport;
use App\StudentSociety;
use DB;
use Illuminate\Http\Request;

class TestController extends Controller
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

    public function loadStudentClubs()
    {
        
        return view('test.st_sports');
    }
    
     public function resultStudentClubs(Request $request)
    {
         $st_id=$request->index;
        //$student=Student::where('st_id', )->select('st_id');
                
       // $club_ids=StudentSport::whereIn('st_id',$student)
                
        //$club_ids=StudentSociety::whereIn('st_id',$student);
      //  $society_ids=StudentSociety::whereIn('st_id',$student)->get();
                               
        $sp_ids = DB::table('student_sports')->where('st_id', $st_id)->select('sp_id')->get();
        $array = json_decode(json_encode($sp_ids), True);
        $sports=Sport::whereIn('sp_id',$array )->select('sport_name','sp_id')->get();        
       // dd($sports);
        
         $so_ids = DB::table('student_societies')->where('student_id', $st_id)->select('society_id')->get();
        $array = json_decode(json_encode($so_ids), True);
        $societies=Society::whereIn('so_id',$array )->select('society_name','so_id')->get(); 
        dd($societies);
             
        //return view('test.result');
    }

}