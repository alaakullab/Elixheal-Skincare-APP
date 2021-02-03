<?php

namespace App\Http\Controllers;

use App\Http\Resources\Faqs_questionResource;
use App\Models\faqs_question;
use Illuminate\Http\Request;

class FaqsQuestionController extends Controller
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
    public function index()
    {
        return Faqs_questionResource::collection(faqs_question::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewAdd()
    {
        return view('admin.faqs.faqs_questions.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        faqs_question::create($request->all());
        return response('Created', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(faqs_question $faqs_question)
    {
        return new Faqs_questionResource($faqs_question);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faqs_question $faqs_question)
    {
        $faqs_question->update([
            'question_value' => $request->question_value,
            'user_id' => $request->user_id,
        ]);
        return response('Updated', 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(faqs_question $faqs_question)
    {
        $faqs_question->delete();
        return response(null, 204);
    }
}
