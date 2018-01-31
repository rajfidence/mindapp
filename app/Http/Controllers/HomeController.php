<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Questions;
use App\Quiz;
use App\User;
use App\Answers;
use App\Options;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Questions::count();
        $users = User::count();
        $quizzes = Quiz::count();
        return view('home', compact('questions', 'users', 'quizzes'));
    }
}
