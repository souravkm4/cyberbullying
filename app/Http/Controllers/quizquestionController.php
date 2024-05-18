<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\DB;

class quizquestioncontroller extends Controller
{
    public function index()
    {
        return view('addquiz');
    }

public function save(Request $request)
{
    
    $validated = $request->validate([
        'aquestion'=>['required'],
        'achoice1'=>['required'],
        'achoice2'=>['required'],
        'achoice3'=>['required'],
        'achoice4'=>['required'],
        'answer'=>['required'],
    ]);
    $quiz_question=new quiz_question();
    $quiz_question->question=$request->aquestion;
    $quiz_question->choice1=$request->achoice1;
    $quiz_question->choice2=$request->achoice2;
    $quiz_question->choice3=$request->achoice3;
    $quiz_question->choice4=$request->achoice3;
    $quiz_question->answer=$request->answer;
    $quiz_question->save();
    return back()->with('status',"Question added successfully");
}
}
