<?php

namespace App\Http\Controllers;

use App\Models\ExamCandidate;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Result;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function joinQuiz($id)
    {
        return view('giveQuiz')
            ->with('quiz', Quiz::where('id', $id)->first())
            ->with('questions', Question::where('quiz_id', $id)->get());
    }
}