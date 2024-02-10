<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Quiz;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        $resultId = Result::where('user_id', session('user_id'))->max('id');
        $result = Result::where('id', $resultId)->first();
        $title = Quiz::where('id', $result->quiz_id)->pluck('title')->first();

        return view('showResult')
            ->with('result', $result)->with('quizTitle', $title);
    }
}