<?php

namespace App\Http\Controllers;

use App\Http\Resources\Faqs_questionResource;
use App\Models\faqs_question;
use Illuminate\Http\Request;

class FaqsQuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['index','show','indexView','createView','storeView']]);
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

    public function indexView(Request $request)
    {
        $items = faqs_question::latest();
        if ($request->filled('search'))
        {
            $items->where('question_value', 'like', "%$request->search%");
        }
        $items = $items->paginate(10);
        return view('admin.faqs.faqs_questions.home')->with(['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createView()
    {
        return view('admin.faqs.faqs_questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['language_id'] = getLangId();
        $data['user_id'] = 1;
        faqs_question::create($data);
        return response('Created', 201);
    }

    public function storeView(Request $request)
    {
        $this->store($request);

        return redirect()->route('admin.faqs_questions.add', app()->getLocale())->with('success', 'Created');


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
