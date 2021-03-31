<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Setting;
use Illuminate\Http\Request;

class QuizController extends Controller
{

    public function indexView(Request $request){
        $settings = Setting::where('language_id', getLangId())->first();
        $questions = Question::where('language_id', getLangId())->get();
        $questions_count = Question::where('language_id', getLangId())->count();
        return view('front.quiz.index',compact('settings','questions','questions_count'));
    }
}
