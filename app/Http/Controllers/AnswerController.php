<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\Result;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function show(Request $request)
    {
        $this->storeResult($request);

        return view('showAnswers')
            ->with('quiz', Quiz::where('id', $request->quiz_id)->first())
            ->with('questions', Question::where('quiz_id', $request->quiz_id)->get())
            ->with('givenAnswers', $request->answer);
    }

    public function store(Request $request)
    {
        $this->storeResult($request);
        return redirect()->route('results')->with('success', 'Quiz done and result published!');
    }

    private function storeResult($request)
    {
        $i = 1;
        $correct = 0;
        $total = 0;
        
        $dbAnswers = Question::where('quiz_id', $request->quiz_id)->get();

        foreach ($dbAnswers as $dbAnswer)
        {
            if ($dbAnswer->correct_option == $request->answer[$i]) {
                $correct++;
            }
            
            $i++;
            $total++;
        }

        Result::create([
            'user_id' => session('user_id'),
            'quiz_id' => $request->quiz_id,
            'quiz_score' => $total,
            'achieved_score' => $correct
        ]);
    }
}