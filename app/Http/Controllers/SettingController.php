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
        $this->middleware('JWT', ['except' => ['index', 'edit', 'show']]);
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
    public function edit(Setting $setting)
    {
        $lang = app()->getLocale();
        $constLang = const_languages::where('code', $lang)->first();
        $data = new SettingResource($setting->where('language_id', $constLang['id'])->first());
        print_r($data);die();

        return view('admin.setting.index', $data);
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
        $setting->update(
            [
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
            ]
            );
        return response('Updated', 202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
