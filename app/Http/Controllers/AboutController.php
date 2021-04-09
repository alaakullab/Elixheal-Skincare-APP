<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indexView(Request $request)
    {        $items = About::latest();
        $items->where('language_id', getLangId());
        if ($request->filled('search'))
            $items->where('title', 'like', "$request->search");
        $items = $items->paginate(10);
        return view('admin.about.home')->with(['items'=>$items]);
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

    public function createView()
    {
        return view('admin.about.create');
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
            'media_path' => 'required|mimes:jpeg,png,jpg,mp4,ogx,oga,ogv,ogg,webm|max:8192',
            'title' => 'required|max:191',
            'sub_title' => 'max:300',
            'desc' => 'max:1024',
        ]);

        $media_path = $request->file('media_path');
        $about = new About();
        if ($media_path)
        {
            $newMediaPathName = rand().'_'.$media_path->getClientOriginalName();
            $about->media_size = $media_path->getSize();
            $mediaMimeType = $media_path->getClientMimeType();
            $mediaType = explode("/",$mediaMimeType);
            if ($mediaType[0] == 'image'){
            $media_path->move(public_path()."/assets/media/about/images/",$newMediaPathName);
            }else
            {
             $media_path->move(public_path()."/assets/media/about/videos/",$newMediaPathName);
            }
            $about->media_extension = $media_path->guessClientExtension();
            $about->media_type = $mediaMimeType;
            $about->media_path = $newMediaPathName;
        }

        $about->title = $request->title;
        $about->sub_title = $request->sub_title;
        $about->desc = $request->desc;
        $about->hyperlink = $request->hyperlink;
        $about->language_id =  getLangId();
        $about->user_id = auth()->id();
        $status = $about->save();
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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    public function editView($local,$id )
    {
        $item = About::where('id', $id)->where('language_id', getLangId())->first();;

        if (isset($item))
        {
            return view('admin.about.edit')->with(['item'=>$item]);
        }else
        {
            toastr()->warning(__('admin.change_lang_warning_error_edit_page_msg'), __('admin.warning'));
            return redirect()->route('admin.about.indexView', app()->getLocale());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $lang, $id, About $about)
    {
        $request->validate([
            'media_path' => 'mimes:jpeg,png,jpg,mp4,ogx,oga,ogv,ogg,webm|max:8192',
            'title' => 'required|max:191',
            'sub_title' => 'max:300',
            'desc' => 'max:1024',
        ]);

        $oldData = $about->where('language_id', getLangId())->first();
        $media_path = $request->file('media_path');
        $data =  [
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'desc' => $request->desc,
            'hyperlink' => $request->hyperlink,
            'language_id' => getLangId(),
            'user_id' => auth()->id()
        ];

        if ($media_path)
        {
            $newMediaPathName = rand().'_'.$media_path->getClientOriginalName();
            $data['media_size'] = $media_path->getSize();
            $mediaMimeType = $media_path->getClientMimeType();
            $mediaType = explode("/",$mediaMimeType);
            if ($mediaType[0] == 'image'){
                if (file_exists(public_path()."/assets/media/about/images/".$oldData->media_path) == 1 && $oldData->media_path != null){
                    unlink(public_path().'/assets/media/about/images/'.$oldData->media_path);
                }
                $media_path->move(public_path()."/assets/media/about/images/",$newMediaPathName);

            }else
            {
                if (file_exists(public_path()."/assets/media/about/videos/".$oldData->media_path) == 1 && $oldData->media_path != null){
                    unlink(public_path().'/assets/media/about/videos/'.$oldData->media_path);
                }
                $media_path->move(public_path()."/assets/media/about/videos/",$newMediaPathName);
            }
            $data['media_extension'] = $media_path->guessClientExtension();
            $data['media_type'] = $mediaMimeType;
            $data['media_path'] = $newMediaPathName;
        }

        $result = $about->where('language_id', getLangId())->where('id', $id)->update($data);

        return response('Updated', 202);
    }

    public function updateView(Request $request,$lang,$id, About $about)
    {
        $result = $this->update($request,$lang,$id, $about);

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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
