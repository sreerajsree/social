<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function add(Request $request) {

        $quiz = new Quiz();
        $quiz->user_id = auth()->user()->id;
        $quiz->ans = $request->ans;
        $quiz->c_id = $request->c_id;
        $quiz->save();
    }
}
