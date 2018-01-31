<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Answers;
use App\Quiz;


class AnswerController extends Controller
{
    /**
     * Create a quiz 
     * Add user Answers
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $quiz = Quiz::create([
            'user_id' => Auth::id(),
        ]);
        
        foreach ($request->input('questions', []) as $key => $question) {
            Answers::create([
                'user_id'     => Auth::id(),
                'question_id' => $question,
                'option_id'   => $request->input('answers.'.$question),
                'quiz_id'     => $quiz->id
            ]);
        }

        return redirect()->route('answers.show', ['quiz_id' => $quiz->id]);
        //return redirect()->route('ViewAnswers', [$quiz->id]);
        
    }

    /**
     * Display all the answers with specific quiz_id
     *
     * @param  int  $quiz_id
     * @return \Illuminate\Http\Response
     */
    public function show($quiz_id)
    {
        $result = Answers::where('quiz_id', $quiz_id)
        ->with('question')
        ->with('option')
        ->get();

        return view('answers.index',compact('result'));
    }

}
