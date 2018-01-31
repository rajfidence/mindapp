<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Questions;
use Auth;

class QuestionController extends Controller
{
    
    /**
     * Display all questions.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Questions::all();
        return view('questions.index',compact('questions'));
    }

}
