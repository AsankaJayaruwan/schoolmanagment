<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;
use Session;

class HouseMeetController extends Controller
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

    public function addHouseMeet()
    {
        return view('housemeet.add_housemeet');
    }

    public function postHouseMeet(Request $request)
    {
        //validation
        $this->validate($request, [
            'activity_name' => 'required',
            'date'=>'required',
            'venue'=>'required',
        ]);
        //save in db
        $data = ($request->all()); //converts to an array

        $activity = Activity::create([
            'activity_name' => $request->activity_name,
            'description' => $request->description,
            'type' => '5',
            'venue' => $request->venue,
            'date' => $request->date,
        ]);

        //redirect page
        return view('common.Add_achievement', ['activity' => $activity]);
    }

    public function searchHouseMeet(Request $request)
    {
        $req = collect($request->all());
        $house_meets = Activity::HouseMeetList();
        if ($req->isNotEmpty()) {
            foreach ($req as $key => $value) {
                switch ($key) {
                    case 'fromToDate':
                        $fromToDate = explode(' - ', $value);
                        $house_meets = $house_meets->whereDate('date', '>=', date('Y-m-d', strtotime($fromToDate[0])))
                            ->whereDate('date', '<=', date('Y-m-d', strtotime($fromToDate[1])));
                        break;
                }
            }
        }

        return view('housemeet.searchhousemeet', [
            'house_meets' => $house_meets->get(),
            'request' => $request
        ]);
    }
}