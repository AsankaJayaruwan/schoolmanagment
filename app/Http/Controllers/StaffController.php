<?php

namespace App\Http\Controllers;

use App\House;
use App\Society;
use App\Teacher;
use Illuminate\Http\Request;
use Session;

class StaffController extends Controller
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

    public function getDashboard()
    {
        return view('dashboard');
    }

    public function addStaff()
    {
        $house = House::all()->pluck('house_name', 'house_code');
        return view('teacher.Add_new_staff', [
            'house' => $house
        ]);
    }


    public function postStaff(Request $request)
    {
        //validation
        $this->validate($request, [
            'tr_id' => 'required|unique:teachers|string|between:3,3 ',
            'first_name' => 'required | max:255 | string',
            'last_name' => 'required | max:255 | string',
            'middle_name' => 'required | max:255 | string',
            'email' => 'string|email|max:255',
            'gender' => 'required',
            'address' => 'required',
            'DoB' => ' before:tomorrow',
            'date_joined' => 'required',
            'city' => 'required|max:255',
            'nic' => 'required | max:10',
            'mobile_number' => 'required',
            'contact_number' => 'required'

        ]);

        // db connection
        $teacher = Teacher::create($request->all());

        $teacher->house = $request->house;

        $teacher->save();

        // redirection page
        Session::flash('success', 'The teacher was successfully saved!!');
        return redirect('addstaff');
//        return redirect()->back()->with('message', 'IT WORKS!');
    }


    public function searchStaff()
    {
        $teachers = Teacher::with(['society_mic','society_asi_mic'])->get();

        $socites = Society::with('mic')->get();

        return view('teacher.Staff_search', [
            'teachers' => $teachers,
            'socites' => $socites,
        ]);

        //datatable

    }

    public function viewStaff($id)
    {
        $house = House::all()->pluck('house_name', 'house_code');

        $teacher = Teacher::where('id', $id)->first(); //gives only one object
        
        // dd($teacher);
        return view('teacher.view_staff', [
            'teacher' => $teacher,
            'house' => $house
        ]); //teacher is the $teacher variable

    }

    public function editStaff($id)
    {
        $house = House::all()->pluck('house_name', 'house_code');
 

      $teacher = Teacher::where('id', $id)->first();

//      $request->session()->put('studentID', $student->id);

       return view('teacher.edit_staff', [
          'teacher' => $teacher,
           'house' => $house
       // return view('teacher.edit_staff');
    ]);
    }

    public function postEditStaff(Request $request)
    {

        //validation
        $this->validate($request, [
            //'tr_id' => 'required|unique:teachers|string|between:3,3 ',
          //  'tr_id' => 'required|string|between:3,3 ',
            'first_name' => 'required | max:255 | string',
            'last_name' => 'required | max:255 | string',
            'middle_name' => 'required | max:255 | string',
            'email' => 'string|email|max:255',
            'gender' => 'required',
            'address' => 'required',
            'DoB' => ' before:tomorrow',
            'date_joined' => 'required',
            'city' => 'max:255',
            'nic' => 'max:10',
            'mobile_number' => 'required',
            'contact_number' => 'required'
        ]);


        // db connection
        $teacherEdit = Teacher::where('id', $request->id)->first();
        $teacherEdit->tr_id = $request->tr_id;
        $teacherEdit->first_name = $request->first_name;
        $teacherEdit->last_name = $request->last_name;
        $teacherEdit->middle_name = $request->middle_name;
        $teacherEdit->email = $request->email;
        $teacherEdit->gender = $request->gender;
        $teacherEdit->address = $request->address;
        $teacherEdit->DoB = $request->DoB;
        $teacherEdit->date_joined = $request->date_joined;
        $teacherEdit->city = $request->city;
        $teacherEdit->nic = $request->nic;
        $teacherEdit->house = $request->house;
        $teacherEdit->save();

        return redirect('searchstaff');
      //  return redirect()->back();


        // redirection page
    }

    public function deleteStaff($id)
    {
        Teacher::find($id)->delete();
        return redirect()->back();
    }

}
