<?php

namespace App\Http\Controllers;

use App\Event;
use App\House;
use App\Student;
use App\Teacher;
use App\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Session;

class ReportController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex() {
        return view('home');
    }

    public function viewStudentHouse(Request $request) {
        $st_houses = House::all();
        $st_classes = Classroom::all();
        
        return view('reports.st_house', ['st_houses' => $st_houses, 'st_classes' => $st_classes,]);

    }
    
    public function reportStudentHouse(Request $request){
        $classroom=$request->classroom;
        $classroom_name=classroom::where('id',$classroom)->select('classroom_name')->first(); //eloquent model or object 
        
        $house=$request->house;
        $house_name=House::where('id',$house)->select('house_name')->first();
        
        $matching_sts = DB::table('students')->where('classroom_id', $request->classroom)->
        where('house_id',$request->house)->get();
        return view('reports.st_house_result',['matching_sts'=>$matching_sts, 'classroom_name'=>$classroom_name, 'house_name'=>$house_name]);
        
    }

    public function viewStudentHouseXXX(Request $request) {
        $house_list = \App\House::all()->pluck('house_name', 'id');
        $house = $request->house_name;
        if ($house == "1") {
            $st_houses = Student::where('house_id', '=', 1)->get();
            //   $st_houses = Student::where('house_id', $request->house_name)->get();
//            return view('reports.st_house', ['st_houses' => $st_houses]);
        } else {
            $st_houses = Student::all();
        }
        return view('reports.st_house', [
            'st_houses' => $st_houses,
            'all_houses' => $house_list
        ]);
    }

    public function viewTeacherHouse() {
        $houses= House::all();
        $teachers = Teacher::all();
        return view('reports.tr_house',['houses'=>$houses]);       
    }
    
    public function viewTeacherHouseReport(Request $request){
        $tr_houses=Teacher::where('house', $request->house_id)->get();
        $houses= House::find($request->house_id);
        //dd($tr_houses);
        return view('reports.tr_house_result',['tr_houses'=>$tr_houses, 'houses'=>$houses]);
        
       
    }

    public function selectForSport() {
        return view('reports.select_for_sports');
    }
    
    public function selectForSportReport(Request $request){
      
        $data=['sport'=>$request->sport, 'purpose'=>$request->purpose];
        
        if(($request->height=='') && ($request->weight=='') && ($request->running_speed=='')){
            $studnet=[''];
            return view('reports.select_for_sports_result',['data'=>$data, 'student'=>$studnet]);
        }
        
        if(($request->height=='') && ($request->weight=='') && !empty($request->running_speed) ){          
            $student=Student::where('running_speed','>=', $request->running_speed)->get();
            return view('reports.select_for_sports_result',['data'=>$data, 'student'=>$student]);
        }
        if(($request->height=='') && !empty($request->weight) && ($request->running_speed=='') ){
            $student=Student::where('weight','>=', $request->weight)->get();
            return view('reports.select_for_sports_result',['data'=>$data, 'student'=>$student]);
        }
        if(($request->height=='') && !empty($request->weight) && !empty($request->running_speed) ){
            $student=Student::where('weight','>=', $request->weight)->
            where('running_speed','>=', $request->running_speed)->get();
            return view('reports.select_for_sports_result',['data'=>$data, 'student'=>$student]);
        }
       
        if(!empty($request->height) && ($request->weight=='') && ($request->running_speed=='') ){             
            $student=Student::where('height','>=', $request->height)->get();
            return view('reports.select_for_sports_result',['data'=>$data, 'student'=>$student]);
            
        }
        if(!empty($request->height) && ($request->weight=='') && !empty($request->running_speed) ){
            $student=Student::where('height','>=', $request->height)->
            where('running_speed','>=', $request->running_speed)->get();
            return view('reports.select_for_sports_result',['data'=>$data, 'student'=>$student]);
        }
       if(!empty($request->height) && !empty($request->weight) && ($request->running_speed=='') ){
            $student=Student::where('height','>=', $request->height)->
            where('weight','>=', $request->weight)->get();
            return view('reports.select_for_sports_result',['data'=>$data, 'student'=>$student]);
        }
       if(!empty($request->height) && !empty($request->weight) && !empty($request->running_speed) ){
            $student=Student::where('height','>=', $request->height)->
            where('weight','>=', $request->weight)->
            where('running_speed','>=', $request->running_speed)->get();
            return view('reports.select_for_sports_result',['data'=>$data, 'student'=>$student]);
        }

    }

    public function pdf() {
        $pdf = PDF::loadView('student.test');
        return $pdf->download('staff.pdf');
    }

}
