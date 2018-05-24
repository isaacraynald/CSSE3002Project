<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use App\User;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AnswerController extends Controller
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
        //
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
    public function store(Request $request, $course, $semester, $question)
    {
        $this->validate($request,[
            'answer'=>'required'
        ]);

        $answer = new Answer;
        $answer->tutor_id = Auth::id();
        $answer->question_id = $question;
        $answer->answer = $request->input('answer');
        $answer->save();
        DB::table('questions')
        ->where('id', $question)
        ->update(['answered'=>1]);
        return redirect()->route('questionList',[$course, $semester])->with('message', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::find($id);

        $user= User::find($question->user_id);

        $courseName=Course::find($question->course_id);

        return view('tutor_answer')->with('question', $question)->with('user', $user)->with('courseName', $courseName);
    }

    public function edit($id)
    {
        $question = Question::find($id);

        $user= User::find($question->user_id);

        $courseName=Course::find($question->course_id);

        $answer = DB::table('answers')
        ->where('question_id', $id)
        ->first();

        return view('tutor_edit_answer')->with('question', $question)->with('user', $user)->with('courseName', $courseName)->with('answer', $answer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $course, $semester, $id)
    {
        $this->validate($request,[
            'answer'=>'required'
        ]);

        $answer = Answer::find($id);
        $answer->answer = $request->input('answer');
        $answer->save();

        return redirect()->route('questionList',[$course, $semester])->with('message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        //
    }
}
