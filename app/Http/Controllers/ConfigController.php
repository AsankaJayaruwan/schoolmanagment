<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Grade;
use App\Section;
use Illuminate\Http\Request;
use Session;

class ConfigController extends Controller
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

    public function getSection()
    {
        return view('config.Add_new_section');
    }

    public function postSection(Request $request)
    {
        //validation
        
        

        //save db
        $section = Section::create($request->all());

        //redirect page
        echo 'Success';
    }

    public function getGrade()
    {
        return view('config.Add_new_grade');
    }

    public function postGrade(Request $request)
    {
        //validation

        //save db
        $grade = Grade::create($request->all());

        //redirect page
        Session::flash('success', 'The student was successfully saved!!');
        return redirect()->back()->with('message', 'IT WORKS!');
    }

    public function getClassroom()
    {
        return view('config.Add_new_class_room');
    }

    public function postClassRoom(Request $request)
    {
        //validation

        //save db
        $classroom = Classroom::create($request->all());

        //redirect page
        Session::flash('success', 'The grade was successfully saved!!');
        return redirect()->back()->with('message', 'IT WORKS!');
    }

    // ajax functions for sections

    public function viewSection()
    {
        $sections = Section::all();
        echo "<table class='table table-condensed'>";
        foreach ($sections as $section) {
            echo "<tr>";
            echo "<td> $section->section_code    </td> <td> $section->section_name   </td> <td>$section->sectional_head </td>";
            echo "<td><button onclick='editsection(" . $section->id . ")'> Edit </button> </td>";
            echo "<td><button onclick='deletesection(" . $section->id . ")'> Delete </button> </td>";
            echo "</tr>";
        }

        echo "</table>";
    }


    public function deleteSection($id)
    {
        Section::find($id)->delete();
        return redirect()->back();
    }

    public function editSection($id)
    {
        $section = Section::find($id);
        return $section;
    }

    // ajax functions for grades

    public function viewGrade()
    {
        $grades = Grade::all();
        echo "<table class='table table-condensed'>";
        foreach ($grades as $grade) {
            echo "<tr>";
            echo "<td> $grade->grade_code</td> <td> $grade->grade_name</td> <td> $grade->grade_cordinator</td> <td> $grade->section_code</td>";
            echo "<td><button> Edit </button> </td>";
            echo "<td><button> Delete </button> </td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    public function deleteGrade($id)
    {
        Grade::find($id)->delete();
        echo 'Success';
    }

    //ajax functions for classrooms

    public function viewClassroom()
    {
        $classrooms = Classroom::all();
        echo "<table class='table table-condensed'>";
        foreach ($classrooms as $classroom) {
            echo "<tr>";
            echo "<td> $classroom->classroom_code</td> <td>$classroom->classroom_name</td> <td>$classroom->teacher_incharge</td>";
            echo "<td> <button onclick=editclassroom (" . $classroom->id . ")'> Edit </button> </td>";
            echo "<td> <button onclick=deleteclassroom (" . $classroom->id . ")'> Delete </button> </td>";
            echo "</tr>";
        }

        echo "</table>";

    }

    public function deleteClassroom($id)
    {
        Classroom::find($id)->delete();
        return redirect()->back();

    }

}