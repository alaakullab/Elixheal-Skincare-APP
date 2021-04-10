<?php

namespace App\Http\Controllers\front;

use App\Models\About;
use App\Models\faqs_question;
use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexView(Request $request){
        $slider = Slider::where('language_id', getLangId())->get();
        return view('front.index',compact('slider'));
    }

    public function contactCreateView()
    {
        return view('front.pages.contact');
    }

    public function faqsView(Request $request)
    {
        $faqs_question = faqs_question::latest();
        $faqs_question->where('language_id', getLangId());
        $search = trim($request->search);
        if ($request->filled('search'))
        {
            $faqs_question->where('question_value', 'like', "%$search%");
        }

        $faqs_question = $faqs_question->get();
        return view('front.pages.faqs',compact('faqs_question'));
    }

    public function aboutView(Request $request)
    {
        $about = About::latest();
        $about->where('language_id', getLangId());
        $search = trim($request->search);
        if ($request->filled('search'))
        {
            $about->where('title', 'like', "%$search%");
        }
        $about = $about->get();
        return view('front.pages.about',compact('about'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
