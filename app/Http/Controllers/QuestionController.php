<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Resources\QuestionResource;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['index','show']]);
    }

    public function index()
    {
        return QuestionResource::collection(Question::latest()->get());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // auth()->user()->question()->create($request->all());
       Question::create($request->all());
       return Response('Created', 201);
    }


    public function show(Question $question)
    {
        return new QuestionResource($question);
    }

    public function edit(Question $question)
    {
        //
    }

    public function update(Request $request, Question $question)
    {
        $question->update(
            [
                'question_value' => $request->question_value,
                'question_type' => $request->question_type
            ]
            );
        return  response('Updated', 202);
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return response(null, 204);
    }
}
