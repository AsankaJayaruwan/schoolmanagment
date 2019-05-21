<?php

namespace App\Http\Controllers;

use App\DevCom;
use Illuminate\Http\Request;
use Session;

class CommiteeController extends Controller
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

    public function addComMember()
    {
        return view('com mem.Add_new_com_member');
    }

    public function postComMem(Request $request)
    {
        //validation
        $this->validate($request, [
            'dev_id' => 'required|unique:dev_coms|between:3,3',
            'first_name' => 'required | max:255 | string',
            'last_name' => 'required | max:255 | string',
            'middle_name' => 'required | max:255 | string',
            'email' => 'string|email|max:255',
            'DoB' => ' before:tomorrow',
            'date_joined' => 'required',
            'city' => 'max:255',
            'nic' => 'max:10',


        ]);


        // db connection
        $devcom = DevCom::create($request->all());

        // redirection page
        Session::flash('success', 'The commitee member was successfully saved!!');
        return redirect()->back()->with('message', 'IT WORKS!');
    }

    public function searchComMember()
    {
        return view('coach.Coach_search');
    }


}