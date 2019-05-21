<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\House;
use App\Student;
use App\StudentAchievement;
use DB;
use Illuminate\Http\Request;
use Session;

class StudentController extends Controller
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

    

    public function getAddStudent()
    {
        $houses = House::all()->pluck('house_name', 'id');
        return view('student/Add_new_st_basic', [
            'houses' => $houses, 'classrooms' => Classroom::all()
        ]);


    }

    public function postSaveStudent(Request $request)
    {
        // dd($request->all());

        //validation
        $this->validate($request, [
            'st_id' => 'required|unique:students|digits:5 |integer',
            'first_name' => 'required | max:255 | string',
            'last_name' => 'required | max:255 | string',
            'middle_name' => 'max:255 | string',
            'classroom_id' => 'required',
            'email' => 'string|email|max:255',
            'DoB' => 'before:tomorrow'
        ]);

        $data = $request->all();
        $data += ['gender' => '1'];

        $selectedHouse = $this->calculateStudentHouse($request->st_id);
        $data += ['house_id' => $selectedHouse->house_code];  //house_id is the foreign key in the student table

        //Save in db
        $student = Student::create($data);

        //redirect page

        $request->session()->put('studentID', $student->id);

        Session::flash('success', 'The student was successfully saved!!');

        return redirect('addsthealth')->with([
            'student' => $student
        ]);
//        return redirect()->back()->with('message', 'IT WORKS!');

    }

    /**
     * Decides the House of the Student by Student ID
     * @param $studentId
     * @return House
     */
    public function calculateStudentHouse($studentId)
    {
        $studentId = floatval($studentId);

        // Counting number of houses available in the database
        $houses = House::all();
        $housesCount = $houses->count();

        //divide house count and get Remainder
        $remainder_x = $studentId % $housesCount;

        return $houses[$remainder_x];
    }

    public function editStudent(Request $request, $st_id)
    {
        $student = Student::findById($st_id);

        if (empty($student)) {
            return abort(404);
        }

        $houses = House::all()->pluck('house_name', 'id');

        $request->session()->put('studentID', $student->id);

        return view('student.edit_new_st_basic', [
            'student' => $student,
            'houses' => $houses
        ]);
    }

    public function postEditStudent(Request $request)
    {
        //validation
//        $this->validate($request, [
//           // 'st_id' => 'required|unique:students|between:5,5',
//            'first_name' => 'required | max:255 | string',
//            'last_name' => 'required | max:255 | string',
//            'middle_name' => 'max:255 | string',
//            'classroom_id' => 'required',
//            'email' => 'string|email|max:255',
//            'DoB' => 'before:tomorrow'
//        ]);

//        $student = Student::findById($request->id);
        $studentId = $request->id;
        $student = Student::where('st_id', $studentId)->first();

        if (empty($student)) {
            return abort(404);
        }
        $student->first_name = $request->first_name;
        $student->middle_name = $request->middle_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->contact = $request->contact;
        $student->DoB = $request->DoB;
        $student->address = $request->address;
        $student->city = $request->city;
        $student->house_id = $request->house_id;
        $student->save();


        Session::flash('success', 'The student details successfully Updated!!');

        return redirect('editsthealth')->with([
            'updateStudentHealth' => $student
        ]);
    }

    public function editStudentHealth(Request $request)
    {
        $studentID = session('studentID');
        if (empty($studentID)) {
            return redirect('addst');
        }
        $session = $request->session();
        $student = $session->has('student')
            ? $session->get('student')   //if then else ?
            : Student::find($studentID);

        return view('student/edit_new_st_health', [
            'studentId' => $studentID,
            'student' => $student
        ]);
    }

    public function deleteStudent($st_id)
    {
        $student = Student::findById($st_id);

        if (empty($student)) {
            return abort(404);
        }

        $student->delete();

        Session::flash('success', 'The student was successfully deleted!!');

        return redirect('searchst', 301);
    }

    public function getAddStHealth(Request $request)
    {
        $studentID = session('studentID');
        if (empty($studentID)) {
            return redirect('addst');
        }
        $session = $request->session();
        $student = $session->has('student')
            ? $session->get('student')   //if then else ?
            : Student::find($studentID);

        return view('student/Add_new_st_health', [
            'studentId' => $studentID,
            'student' => $student
        ]);
    }

    public function postSaveStudentMedical(Request $request)
    {
        $this->validate($request, [
            'height' => 'required | min:0 | max: 215',
            'weight' => 'required | min:0 | max:99.99',
            'running_speed' => 'required ] min:0 | max:12'
        ]);

        $session = $request->session();

        if ($session->has('studentID')) {
            $student = Student::find($session->get('studentID'));
            $student->height = $request->height;
            $student->weight = $request->weight;
            $student->running_speed = $request->rung_spd;
            $student->sickness = $request->sickness;

            $student->save();
        }

        Session::flash('success', 'The student details were successfully Added!!');

        $request->session()->forget(['studentID', 'student']);

        return redirect('searchst');
    }

    public function getStSearch()
    {
//        $students = Student::with(['classStudent'])->get();

//        var_dump($students);
//        exit();
        $students = Student::all();

        return view('student/St_search', [
            'students' => $students
        ]);

    }

    public function searchStSearch()
    {
        return view('student/St_search');

    }

    public function searchAchievement($id)
    {
        $student = Student::findById($id);

        if ($student == null) {
            return abort(404);
        }
//        $activity= DB::table('activities')->whereRaw("YEAR(date)=2017")->get();
//        dd($activity);
//        $total=StudentAchievement::where('student_id',$student->id)->sum('mark');

        $student_sport_data = $this->get_student_data($student->id);
        $student_society_data = $this->get_society_data($student->id);


//        return [$student_society_data];

        return view('student/St_profile_ach', [
            'student' => $student,
            'student_sport_data' => $student_sport_data,
            'student_society_data' => $student_society_data
        ]);
    }

    private function get_student_data($id)
    {
//        return $id;

        $sort_order = 'desc';

//        DB::statement('set @n = 0;');
        $data = StudentAchievement::leftJoin('students', function ($query) {
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
//                DB::raw('students.st_id'),
//                DB::raw('sports.id as sp_id'),
                DB::raw('sports.sport_name'),
//                DB::raw('YEAR(CURRENT_TIMESTAMP) - YEAR(students.DoB) as age'),
                DB::raw('sum(student_achievements.mark) as marks')
//                DB::raw('student_achievements.ach_id')
//                ,
//                DB::raw('@n := @n + 1 as Rank_ID')
            )
            ->where('students.id', '=', $id)
            ->where('sports.sport_name','!=',null)
            ->orderBy('marks', $sort_order)
            ->groupBy('sports.id', 'students.st_id');


        return $data->get();
    }

    private function get_society_data($id)
    {
        $sort_order = 'desc';

        $data = StudentAchievement::leftJoin('students', function ($query) {
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
//                DB::raw('students.st_id'),
//                DB::raw('societies.id as so_id'),
                DB::raw('societies.society_name'),
//                DB::raw('YEAR(CURRENT_TIMESTAMP) - YEAR(students.DoB) as age'),
                DB::raw('sum(student_achievements.mark) as marks')
//                DB::raw('student_achievements.ach_id')
//                ,
//                DB::raw('@n := @n + 1 as Rank_ID')
            )
            ->where('societies.society_name','!=',null)
            ->where('students.id', '=', $id)
            ->orderBy('marks', $sort_order)
            ->groupBy('societies.id', 'students.st_id');


        return $data->get();
    }
}
