<?php

namespace App\Http\Controllers;

use App\Event;
use Session;

class EventController extends Controller
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

    public function getCalendar()
    {
        return view('event.calendar');
    }

}