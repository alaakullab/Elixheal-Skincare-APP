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

    public function edit()
    {

        return new SettingResource(Setting::where('language_id', getLangId())->first());
    }

    public function viewEdit(){
        $data = $this->edit();
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
            'maintenance_status' => isset($request->maintenance_status) ? 'open' : 'close',
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'whatsapp' => $request->whatsapp,
            'user_id' => $request->user_id,
        ];
           $result = $setting->where('language_id', getLangId())->update($data);

        return response('Updated', 202);
    }

    public function viewUpdate(Request $request, Setting $setting){

        $result = $this->update($request , $setting);
        return redirect()->route('admin.setting.edit', app()->getLocale());

        // return view('admin.setting.index', ['result' => $result, ]);
    }

}
