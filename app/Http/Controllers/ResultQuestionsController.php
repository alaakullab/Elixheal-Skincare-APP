<?php

namespace App\Http\Controllers;

use App\Models\result_questions;
use Illuminate\Http\Request;

class ResultQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indexView(Request $request)
    {
         $items = result_questions::latest();
        $items->where('language_id', getLangId());

        if ($request->filled('search'))
        {
            $items->where('question_value', 'like', "%$request->search%");
        }
        $items = $items->paginate(10);
//         print_r($items[0]['question_id']);die();

        return view('admin.quiz.results')->with(['items'=>$items]);

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\result_questions  $result_questions
     * @return \Illuminate\Http\Response
     */
    public function show(result_questions $result_questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\result_questions  $result_questions
     * @return \Illuminate\Http\Response
     */
    public function edit(result_questions $result_questions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\result_questions  $result_questions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, result_questions $result_questions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\result_questions  $result_questions
     * @return \Illuminate\Http\Response
     */
    public function destroy(result_questions $result_questions)
    {
        //
    }
}
