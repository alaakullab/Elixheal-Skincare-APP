<?php

namespace App\Http\Controllers;

use App\Http\Resources\AnswerResource;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{

    public function __construct()
    {
//        $this->middleware('JWT', ['except' => ['index','show']]);
    }

    public function indexView(Request $request, $lang, $id)
    {
        $question =Question::find($id);
        $items = $question->answer()->paginate(10);
        if ($request->filled('search'))
            $items->where('name', 'like', "$request->search");
        $items = $items;
        return view('admin.quiz.answer.home')->with(['items' => $items, 'question' => $question]);
    }

    public function editView($local, $id)
    {
        $questions = Question::all();
        $item = Answer::where('id', $id)->first();
        $question = Question::find($item->question_id);
        return view('admin.quiz.answer.edit')->with(['item' => $item, 'questions' => $questions, 'question' => $question]);
    }

    public function createView($lang, $id)
    {
        $question =Question::find($id);

        $questions = Question::all();
        return view('admin.quiz.answer.create', compact('questions','question'));
    }

    public function storeView(Request $request, $lang, $id)
    {
        $question = Question::find($id);
        $data = $request->all();
        $data['user_id'] = auth()->id();
        $data['language_id'] = getLangId();
        $status = $question->answer()->create($data);
        if($status){
            toastr()->success(__('admin.save_successful_msg'), __('admin.success'));
        }else{
        toastr()->error(__('admin.save_error_msg'), __('admin.error'));
        }

        return back();
    }

    public function updateView(Request $request, $local, $id)
    {
        $answer = Answer::find($id);
        $data = $request->all();
        $status = $answer->update($data);
        if($status){
            toastr()->success(__('admin.save_successful_msg'), __('admin.success'));
        }else{
        toastr()->error(__('admin.save_error_msg'), __('admin.error'));
        }

        return back();
    }
    public function deleteView(Request $request, $local, $id)
    {
        $answer = Answer::find($id);
        $status = $answer->delete();
        if($status){
            toastr()->success(__('admin.save_successful_msg'), __('admin.success'));
        }else{
        toastr()->error(__('admin.save_error_msg'), __('admin.error'));
        }

        return back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Question $question)
    {
        return AnswerResource::collection($question->answer);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Question $question, Request $request)
    {
        $answer = $question->answer()->create($request->all());
        return response(['answer' => new AnswerResource($answer), 201]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Answer $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question, Answer $answer)
    {
        return new AnswerResource($answer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Answer $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Answer $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Question $question, Request $request, Answer $answer)
    {
        $answer->update($request->all());
        return response('updated', 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Answer $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question, Answer $answer)
    {
        $answer->delete();
        return response(null, 204);
    }
}
