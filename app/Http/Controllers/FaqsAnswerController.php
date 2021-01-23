<?php

namespace App\Http\Controllers;

use App\Http\Resources\faqs_answerResource;
use App\Models\faqs_answer;
use App\Models\faqs_question;
use Database\Factories\FaqsAnswerFactory;
use Illuminate\Http\Request;

class FaqsAnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(faqs_question $faqs_question)
    {
        return faqs_answerResource::collection($faqs_question->faqs_answer);
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
    public function store(faqs_question $faqs_question, Request $request)
    {
        $faqs_answer = $faqs_question->faqs_answer()->create($request->all());
        return response(['faqs_answer'=> new faqs_answerResource($faqs_answer),201]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\faqs_answer  $faqs_answer
     * @return \Illuminate\Http\Response
     */
    public function show(faqs_question $faqs_question,faqs_answer $faqs_answer)
    {
        return new faqs_answerResource($faqs_answer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\faqs_answer  $faqs_answer
     * @return \Illuminate\Http\Response
     */
    public function edit(faqs_answer $faqs_answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faqs_answer  $faqs_answer
     * @return \Illuminate\Http\Response
     */
    public function update(faqs_question $faqs_question ,Request $request, faqs_answer $faqs_answer)
    {
        $faqs_answer->update($request->all());
        return response('updated', 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\faqs_answer  $faqs_answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(faqs_answer $faqs_answer)
    {
        //
    }
}
