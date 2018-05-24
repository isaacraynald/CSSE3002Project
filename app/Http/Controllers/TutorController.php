<?php

namespace App\Http\Controllers;

use App\Tutor;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $courses = DB::table('tutors')
        ->select('courses.id', 'courses.course_id', 'courses.course_name', 'tutors.semester_id')
        ->where('tutors.tutor_id', Auth::id())
        ->join('courses', 'courses.id','=', 'tutors.course_id')
        ->join('semesters', 'tutors.semester_id', '=', 'semesters.id')
        ->get();

        $semesters = DB::table('semesters')
        ->select('id', 'year', 'semester')
        ->orderBy('semesters.id', 'desc')
        ->get();

        $questions = DB::table('questions')
        ->select('questions.answered', 'questions.course_id', 'questions.semester_id')
        ->where('answered', 0)
        ->get();


        return view('tutor_course_list')->with('courses', $courses)->with('semesters', $semesters)->with('questions', $questions);

    }

    public function showQuestion($id, $semester){
        $questions = DB::table('questions')
        ->select('questions.id', 'questions.question', 'questions.course_id','questions.user_id', 'users.first_name', 'users.last_name','questions.answered')
        ->join('users', 'questions.user_id','=', 'users.id')
        ->where('questions.course_id', $id)
        ->where('questions.semester_id', $semester)
        ->get();

        $courseName=Course::find($id);

        return view('tutor_question_list')->with('questions', $questions)->with('courseName', $courseName);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function show(Tutor $tutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutor $tutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tutor $tutor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutor $tutor)
    {
        //
    }
}
