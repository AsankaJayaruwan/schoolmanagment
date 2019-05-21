<?php

namespace App\Http\Controllers;

use App\Society;
use App\Sport;
use App\StudentAchievement;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
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

    public function studentRank(Request $request)
    {
        $currentYear = Carbon::now()->year;

        $student_age_groups = $this->student_age_groups_array();

        // get current year
        // subtract and get min year and max year from selected age group
        // query the database by adding where clause with dates in between the max and min years


//        $search_student_age_min = $currentYear - ;
//        $search_student_age_min = $currentYear - ;

        $sports_selection = $this->get_sport_selection();

        $year_selection = $this->available_years();

        $society_selection = $this->get_society_selection();

//        return [$year_selection];

        $sort_order = 'desc';

//        DB::statement('set @n = 0;');
        $sport_query = StudentAchievement::with(['achievement', 'student'])
            ->leftJoin('students', function ($query) {
                $query->on('student_achievements.st_id', '=', 'students.st_id');
            })
            ->leftJoin('achievements', function ($query) {
                $query->on('student_achievements.ach_id', '=', 'achievements.id');
            })
            ->leftJoin('activities', function ($query) {
                $query->on('achievements.act_id', '=', 'activities.id');
            })
            ->leftJoin('sports', function ($query) {
                $query->on('activities.sp_id', '=', 'sports.sp_id');
            })
            ->select(
                DB::raw('students.st_id'),
                DB::raw('sports.id as sp_id'),
                DB::raw('sports.sport_name'),
                DB::raw('YEAR(CURRENT_TIMESTAMP) - YEAR(students.DoB) as age'),
                DB::raw('sum(student_achievements.mark) as marks'),
                DB::raw('student_achievements.ach_id')
//                ,
//                DB::raw('@n := @n + 1 as Rank_ID')
            )
            ->where('sports.sport_name','!=',null)
            ->orderBy('marks', $sort_order)
            ->groupBy('sports.id', 'students.st_id');

        if ($request->has('sport_selection')) {
            $sport_query = $sport_query->where('sports.sport_name', $request->sport_selection);
        }

        if ($request->has('year_selection')) {
            $sport_query = $sport_query->whereDate(DB::raw('year(student_achievements.created_at)'),
                $request->year_selection);
        }

        $sport_query = $sport_query->get();

        /*
                return [
                    $sport_query
                ];
        */

//        */
///*
//        DB::statement('set @n := 0;');

        $society_query = StudentAchievement::with(['achievement', 'student'])
            ->leftJoin('students', function ($query) {
                $query->on('student_achievements.st_id', '=', 'students.st_id');
            })
            ->leftJoin('achievements', function ($query) {
                $query->on('student_achievements.ach_id', '=', 'achievements.id');
            })
            ->leftJoin('activities', function ($query) {
                $query->on('achievements.act_id', '=', 'activities.id');
            })
            /*
            ->leftJoin('society_activities', function ($query) {
                $query->on('society_activities.act_id', '=', 'activities.id');
            })
            */
            ->leftJoin('societies', function ($query) {
                $query->on('activities.so_id', '=', 'societies.so_id');
            })
            ->select(
                DB::raw('students.st_id'),
                DB::raw('societies.id as so_id'),
                DB::raw('societies.society_name'),
                DB::raw('YEAR(CURRENT_TIMESTAMP) - YEAR(students.DoB) as age'),
                DB::raw('sum(student_achievements.mark) as marks'),
                DB::raw('student_achievements.ach_id')
//                ,
//                DB::raw('@n := @n + 1 as Rank_ID')
            )
            ->where('societies.society_name','!=',null)
            ->orderBy('marks', $sort_order)
            ->groupBy('societies.id', 'students.st_id');


        if ($request->has('society_selection')) {
            $society_query = $society_query->where('societies.society_name', $request->society_selection);
        }

        if ($request->has('year_selection')) {
            $society_query = $society_query->whereDate(DB::raw('year(student_achievements.created_at)'),
                $request->year_selection);
        }


        $society_query = $society_query->get();
        /*
                return [
                    $society_query
                ];
        */
        /*
                return [
                    $sport_query,
                    $society_query
                ];
          */
        // Aggregate all achievements of each student
        // Aggregate achievements
//return [$student_age_groups->pluck('label', 'key')];
        return view('reports.student_rank', [
//            'students' => $students,
            'sport_activities' => $sport_query,
            'society_activities' => $society_query,
            'age_group' => $student_age_groups->pluck('label', 'key'),
            'sports_selection' => $sports_selection,
            'year_selection' => $year_selection,
            'society_selection' => $society_selection,
            'request' => $request
        ]);
    }

    private function student_age_groups_array()
    {
        $group = collect([
            [
                'key' => 'U8',
                'label' => 'Under 8',
                'value' => [
                    'max' => 6,
                    'min' => 7
                ]
            ],
            [
                'key' => 'U10',
                'label' => 'Under 10',
                'value' => [
                    'max' => 9,
                    'min' => 8
                ]
            ],
            [
                'key' => "U14",
                'label' => 'Under 14',
                'value' => [
                    'max' => 13,
                    'min' => 12
                ]
            ],
            [
                'key' => "U16",
                'label' => 'Under 16',
                'value' => [
                    'max' => 15,
                    'min' => 14
                ]
            ],
            [
                'key' => "U18",
                'label' => 'Under 18',
                'value' => [
                    'max' => 17,
                    'min' => 16
                ]
            ],
            [
                'key' => "U20",
                'label' => 'Under 20',
                'value' => [
                    'max' => 19,
                    'min' => 18
                ]
            ]
        ]);
        return $group;
    }

    private function get_sport_selection()
    {
        $sports = Sport::all()->pluck('sport_name', 'sport_name');
//        $sports= StudentAchievement::leftJoin('');
        return $sports;
        return $sports->put(null, 'Select Sport');
    }

    public function available_years()
    {
        $yrs = StudentAchievement::select(
            DB::raw('DISTINCT Year(created_at) as years')
        )->get()->pluck('years', 'years');
        return $yrs;
    }

    private function get_society_selection()
    {
        $society_array = Society::all()->pluck('society_name', 'society_name');
        return $society_array;
        return $society_array->put(null, 'Select Society');
    }
}