<?php

namespace App\Http\Controllers;

use App\Question;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class QuestionController extends Controller
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
    public function store(Request $request, $courseId, $course, $semester)
    {
        $this->validate($request,[
            'question'=>'required'
        ]);

        $question = new Question;
        $question->user_id = Auth::id();
        $question->question = $request->input('question');
        $question->course_id = $course;
        $question->semester_id = $semester;
        $question->save();
        return back()->with('message', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $course = $request->input('result');

        $course2 = DB::table('courses')
        ->select('id', 'course_id')
        ->where('courses.course_id','LIKE','%'.$course.'%')
        ->first();
        if(count($course2)>0){
        $question= DB::table('answers')
        ->select('answers.answer', 'questions.question','users.first_name as user_first_name','users.last_name as user_last_name','answers.tutor_id','questions.semester_id', 'courses.course_id')
        ->join('questions', 'questions.id','=', 'answers.question_id')
        ->join('courses', 'courses.id','=', 'questions.course_id')
        ->join('users', 'users.id','=','questions.user_id')
        ->join('tutors', 'tutors.id','=','answers.tutor_id')
        ->where('courses.course_id','LIKE','%'.$course.'%')
        ->get();

        $tutor=DB::table('tutors')
        ->select('tutors.id', 'users.first_name', 'users.last_name','tutors.semester_id')
        ->join('users', 'tutors.tutor_id','=', 'users.id')
        ->join('courses', 'courses.id', '=', 'tutors.course_id')
        ->where('courses.course_id','LIKE','%'.$course.'%')
        ->get();

        $semesters = DB::table('semesters')
        ->select('id', 'year', 'semester')
        ->orderBy('semesters.id', 'desc')
        ->get();

        $courseName = $course2->course_id;

        $courseId = $course2->id;


        return view('course')->with('questions', $question)->with('tutors', $tutor)->with('semesters', $semesters)->with('courses', $courseName)->with('courseId', $courseId);
        }
        else{
            return back()->with('message', 'fail');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);
        $question->delete();

        return back()->with('message', 'Delete Success');
    }
}
