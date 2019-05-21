<?php

namespace App\Http\Controllers;

use App\Coach;
use Illuminate\Http\Request;
use Session;

class CoachController extends Controller
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

    public function addCoach()
    {
        return view('coach.Add_new_coach');
    }

    public function postCoach(Request $request)
    {
        //validation
//        $this->validate($request, [
//            'coach_id' => 'required|between:3,3',
//            'first_name' => 'required | max:255 | string',
//            'last_name' => 'required | max:255 | string',
//            'middle_name' => 'required | max:255 | string',
//            'email' => 'string|email|max:255',
//            'gender' => 'required',
//            'address' => 'required',
//            'DoB' => ' before:tomorrow',
//            'date_joined' => 'required',
//            'city' => 'max:255',
//            'nic' => 'max:10',
//            'mobile_number' => 'required',
//            'contact_number' => 'required'
//        ]);

        //saving in the db
        $coach = Coach::create($request->all());

        //redirecting page
        Session::flash('success', 'The coach was successfully saved!!');
        return redirect()->back()->with('message', 'IT WORKS!');

    }

    public function searchCoach()
    {

        $coachs = Coach::with(['sports'])->get();

        return view('coach.Coach_search', ['coachs' => $coachs]);

        //datatable

    }

    public function viewCouch($id)
    {
        $couch = Coach::where('id', $id)->first(); //gives only one object

        return view('coach.view_coach', [
            'couch' => $couch,
        ]);

    }

    public function editViewCouch($id)
    {
        $couch = Coach::where('id', $id)->first(); //gives only one object
        Session::flash('success', 'The activity was successfully saved!!');
        return view('coach.edit_coach', [
            'couch' => $couch,
        ]);
    }

    public function editCouch(Request $request)
    {
//
//        $this->validate($request, [
//            'coach_id' => 'required|between:3,3',
//            'first_name' => 'required | max:255 | string',
//            'last_name' => 'required | max:255 | string',
//            'middle_name' => 'required | max:255 | string',
//            'email' => 'string|email|max:255',
//            'gender' => 'required',
//            'address' => 'required',
//            'DoB' => ' before:tomorrow',
//            'date_joined' => 'required',
//            'city' => 'max:255',
//            'nic' => 'max:10',
//            'mobile_number' => 'required',
//            'contact_number' => 'required'
//        ]);

        //Edit in the db
        $couchEdit = Coach::where('id', $request->id)->first();
        $couchEdit->coach_id = $request->coach_id;
        $couchEdit->first_name = $request->first_name;
        $couchEdit->last_name = $request->last_name;
        $couchEdit->middle_name = $request->middle_name;
        $couchEdit->DoB = $request->DoB;
        $couchEdit->gender = $request->gender;
        $couchEdit->civil_status = $request->civil_status;
        $couchEdit->religion = $request->religion;
        $couchEdit->nic = $request->nic;
        $couchEdit->email = $request->email;
        $couchEdit->date_joined = $request->date_joined;
        $couchEdit->address = $request->address;
        $couchEdit->city = $request->city;
        $couchEdit->sp_id = $request->sp_id;
        $couchEdit->contact_number = $request->contact_number;
        $couchEdit->mobile_number = $request->mobile_number;
        $couchEdit->save();

        return redirect()->back();

    }

    public function deleteCouch($id)
    {
        Coach::find($id)->delete();
        return redirect()->back();
    }
}