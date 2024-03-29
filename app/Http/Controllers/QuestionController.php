<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Resources\QuestionResource;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function __construct()
    {
//        $this->middleware('JWT', ['except' => ['index','show']]);
    }

    public function index()
    {
        return QuestionResource::collection(Question::latest()->get());
    }
    public function indexView(Request $request)
    {
         $items = Question::latest();
         $items->where('language_id', getLangId());
        if ($request->filled('search'))
        {
            $items->where('question_value', 'like', "%$request->search%");
        }
        $items = $items->paginate(10);
        return view('admin.quiz.question.home')->with(['items'=>$items]);

    }
    public function editView($local,$id)
    {
        $item = Question::where('id',$id)->first();
        return view('admin.quiz.question.edit')->with(['item'=>$item]);
    }
    public function createView()
    {
        return view('admin.quiz.question.create');
    }
    public function storeView(Request $request)
    {
        $data = $request->all();
        $data['user_id']=auth()->id();
        $data['language_id']=getLangId();
        $status = Question::create($data);
       if($status){
        toastr()->success(__('admin.save_successful_msg'), __('admin.success'));
       }else
       {
        toastr()->error(__('admin.save_error_msg'), __('admin.error'));
       }

        return back();
    }
    public function updateView(Request $request,$local,$id  )
    {
        $question = Question::find($id);
        $status =  $question->update(
            [
                'question_value' => $request->question_value,
                'question_type' => $request->question_type
            ]
        );
        if($status){
            toastr()->success(__('admin.update_successful_msg'), __('admin.success'));
           }else
           {
            toastr()->error(__('admin.update_error_msg'), __('admin.error'));
        }
        return back();
    }
    public function deleteView(Request $request,$local,$id  )
    {
        $question = Question::find($id);
        $status = $question->delete();
        if($status){
            toastr()->success(__('admin.delete_successful_msg'), __('admin.success'));
           }else
           {
            toastr()->error(__('admin.delete_error_msg'), __('admin.error'));
        }
        return back();
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
