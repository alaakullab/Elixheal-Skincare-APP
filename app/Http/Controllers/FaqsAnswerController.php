<?php

namespace App\Http\Controllers;

use App\Http\Resources\faqs_answerResource;
use App\Models\const_languages;
use App\Models\faqs_answer;
use App\Models\faqs_question;
use Database\Factories\FaqsAnswerFactory;
use Illuminate\Http\Request;

class FaqsAnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['index','indexView','createView','storeView','editView','updateView','show']]);
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

    public function indexView(Request $request, $lang, $id)
    {
        $faqs_question =faqs_question::find($id);
        $items = $faqs_question->faqs_answer()->paginate(10);
        if ($request->filled('search'))
            $items->where('name', 'like', "$request->search");
        $items = $items;
        return view('admin.faqs.faqs_answer.home')->with(['items' => $items, 'faqs_question' => $faqs_question]);
    }

    public function createView($lang, $id)
    {
        $faqs_question =faqs_question::find($id);
        $faqs_questions = faqs_question::all();
        return view('admin.faqs.faqs_answer.create', compact('faqs_questions','faqs_question'));
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

    public function storeView(Request $request, $lang, $id)
    {
        $faqs_question = faqs_question::find($id);
        $data = $request->all();
        $data['user_id'] = auth()->id();
        $status = $faqs_question->faqs_answer()->create($data);
        if($status){
            toastr()->success(__('admin.save_successful_msg'), __('admin.success'));
        }else{
            toastr()->error(__('admin.save_error_msg'), __('admin.error'));
        }

        return back();
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

    public function editView($local, $id)
    {
        $item = faqs_answer::where('id', $id)->first();
        $faqs_question = faqs_question::find($item->faqs_question_id);
        $faqs_questions = faqs_question::all();
        return view('admin.faqs.faqs_answer.edit')->with(['item' => $item, 'faqs_questions' => $faqs_questions, 'faqs_question' => $faqs_question]);
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

    public function updateView(Request $request, $local, $id)
    {
        $faqs_answer = faqs_answer::find($id);
        $data = $request->all();
        $status = $faqs_answer->update($data);
        if($status){
            toastr()->success(__('admin.save_successful_msg'), __('admin.success'));
        }else{
            toastr()->error(__('admin.save_error_msg'), __('admin.error'));
        }

        return back();
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
