<?php

namespace App\Http\Controllers;

use App\Http\Resources\SettingResource;
use App\Models\const_languages;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('JWT', ['except' => ['index', 'viewEdit', 'viewUpdate', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SettingResource::collection(Setting::latest()->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        return new SettingResource($setting);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */

    public function edit($lang, $id)
    {
        $constLang = const_languages::where('code', $lang)->first();
        $language = isset($constLang['id']) ? $constLang['id'] : 1;
        return new SettingResource(Setting::where([['language_id', $language],['id', $id]])->first());
    }

    public function viewEdit($lang, $id){
        $data = $this->edit($lang, $id);
        return view('admin.setting.index', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $data =  [
            'site_name' => $request->site_name,
            'site_desc' => $request->site_desc,
            'logo' => $request->logo,
            'icon' => $request->icon,
            'copyright' => $request->copyright,
            'email' => $request->email,
            'meta_keyword' => $request->meta_keyword,
            'meta_robots' => $request->meta_robots,
            'Maintenance_message' => $request->Maintenance_message,
            'phone' => $request->phone,
            'maintenance_status' => $request->maintenance_status,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'whatsapp' => $request->whatsapp,
            'language_id' => $request->language_id,
            'user_id' => $request->user_id,
        ];
           $result = $setting->update($data);
        return response('Updated', 202);
    }

    public function viewUpdate(Request $request, Setting $setting){

        $result = $this->update( $request , $setting);

        print_r($result);die();
        return redirect()->route('admin.setting.edit', app()->getLocale())->with('status', $result);

        // return view('admin.setting.index', ['result' => $result, ]);
    }

}
