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
        $this->middleware('JWT', ['except' => ['index', 'indexView', 'createView','storeView', 'editView', 'updateView', 'show', 'deleteView']]);
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
        $slider = new Slider();
        if ($image_path)
        {
            $newImagePathName = rand().'_'.$image_path->getClientOriginalName();
            $image_path->move(public_path()."/images/slider/",$newImagePathName);
            $slider->image_path = $newImagePathName;
        }

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

    public function editView($lang,$id )
    {
        $item = Slider::where('id', $id)->where('language_id', getLangId())->first();

        if (isset($item))
        {
            return view('admin.slider.edit')->with(['item'=>$item]);
        }else
        {
            toastr()->warning(__('admin.change_lang_warning_error_edit_page_msg'), __('admin.warning'));
            return redirect()->route('admin.slider.indexView', app()->getLocale());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lang, $id, Slider $slider)
    {
        $request->validate([
            'image_path' => 'image|mimes:jpeg,png,jpg|max:10240',
            'title' => 'max:255',
            'desc' => 'max:800',
        ]);

        $oldData = $slider->where('language_id', getLangId())->where('id', $id)->first();
        $image_path = $request->file('image_path');

        $data =  [
            'title' => $request->title,
            'desc' => $request->desc,
            'hyperlink' => $request->hyperlink,
            'image_area' => "HomePage",
            'language_id' => getLangId(),
            'user_id' => auth()->id()
        ];

        if ($image_path)
        {
            if (file_exists(public_path()."/images/slider/".$oldData->image_path) == 1 && $oldData->image_path != null){
                unlink(public_path().'/images/slider/'.$oldData->image_path);
            }
            $newImagePathName = rand().'_'.$image_path->getClientOriginalName();
            $image_path->move(public_path()."/images/slider/",$newImagePathName);
            $data['image_path'] = $newImagePathName;
        }

        $result = $slider->where('language_id', getLangId())->where('id', $id)->update($data);

        return response('Updated', 202);
    }

    public function updateView(Request $request, $lang, $id, Slider $slider)
    {
        $result = $this->update($request, $lang, $id, $slider);

        if($result->original == "Updated"){
            toastr()->success(__('admin.update_successful_msg'), __('admin.success'));
        }else
        {
            toastr()->error(__('admin.update_error_msg'), __('admin.error'));
        }
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, $id)
    {
        $slider = Slider::find($id);
        if (file_exists(public_path()."/images/slider/".$slider->image_path) == 1 && $slider->image_path != null){
            unlink(public_path().'/images/slider/'.$slider->image_path);
        }
        $slider = Slider::find($id);
        $status = $slider->delete();
        return response(null, 204);
    }

    public function deleteView($lang, $id)
    {
        $result = $this->destroy($lang, $id);
        if($result->original == null){
            toastr()->success(__('admin.delete_successful_msg'), __('admin.success'));
        }else
        {
            toastr()->error(__('admin.delete_error_msg'), __('admin.error'));
        }
        return back();
    }

}
