<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['index', 'indexView', 'createView','storeView', 'viewEdit', 'viewUpdate', 'show']]);
    }

    public function index()
    {
        //
    }

    public function indexView(Request $request)
    {        $items = Slider::latest();
        $items->where('language_id', getLangId());
        if ($request->filled('search'))
            $items->where('name', 'like', "$request->search");
        $items = $items->paginate(10);
        return view('admin.slider.home')->with(['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createView()
    {
        return view('admin.slider.create');
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

    public function storeView(Request $request)
    {
        $request->validate([
            'image_path' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'title' => 'max:255',
            'desc' => 'max:800',
        ]);

        $image_path = $request->file('image_path');

        if ($image_path)
        {
            $newImagePathName = rand().'_'.$image_path->getClientOriginalName();
            $image_path->move(public_path()."/images/slider/",$newImagePathName);
        }else{
            $newImagePathName = null;
        }

        $slider = new Slider();
        $slider->image_path = $newImagePathName;
        $slider->title = $request->title;
        $slider->desc = $request->desc;
        $slider->hyperlink = $request->hyperlink;
        $slider->image_area = "HomePage";
        $slider->language_id =  getLangId();
        $slider->user_id = auth()->id();
        $status = $slider->save();
        if($status){
            toastr()->success(__('admin.save_successful_msg'), __('admin.success'));
        }else
        {
            toastr()->error(__('admin.save_error_msg'), __('admin.error'));
        }
        return back();

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
