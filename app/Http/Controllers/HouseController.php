<?php

namespace App\Http\Controllers;

use App\House;

class HouseController extends Controller
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

    public function searchHouses()
    {
        $houses = House::all();
        return view('house.search_house', [
            'houses' => $houses
        ]);
    }
}