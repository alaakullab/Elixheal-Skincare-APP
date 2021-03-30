<?php

namespace App\Http\Controllers;

use App\Http\Resources\SettingResource;
use App\Models\const_languages;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Http\File;


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

    public function store(Request $request)
    {
        Setting::create($request->all());
        // $setting = new Setting;
        // $setting->site_name = $request->name;
        // $setting->language_id = $request->language_id;
        // $setting->user_id = $request->user_id;
        // $setting->save();
        return response('created', 201);
    }

    public function edit()
    {
        // print_r(app()->getLocale());die();
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

            $validator = $request->validate([
                'logo' => 'image|mimes:jpeg,png,jpg|max:2048',
                'icon' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
             $oldData = Setting::where('language_id', getLangId())->first();
             $logo = $request->file('logo');
             $icon = $request->file('icon');

            if ($logo)
                {
                    if (file_exists(public_path()."/images/logo/".$oldData->logo) == 1){
                        unlink(public_path().'/images/logo/'.$oldData->logo);
                    }
                    $newLogoName = rand().'.'.$logo->getClientOriginalExtension();
                  $logo->move(public_path()."/images/logo/",$newLogoName);
            }else{
                $newLogoName = null;
            }
            if ($icon)
            {
                if (file_exists(public_path()."/images/icon/".$oldData->icon) == 1){
                    unlink(public_path()."/images/icon/".$oldData->icon);
                }
                $newIconName = rand().'.'.$icon->getClientOriginalExtension();
                $icon->move(public_path("/images/icon/"), $newIconName);
            }else{
                $newIconName = null;
            }

        $data =  [
            'site_name' => $request->site_name,
            'site_desc' => $request->site_desc,
            'logo' => $newLogoName,
            'icon' => $newIconName,
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
            'address' => $request->address,
            'user_id' => $request->user_id,
        ];
           $result = $setting->where('language_id', getLangId())->update($data);

        return response('Updated', 202);
    }

    public function viewUpdate(Request $request, Setting $setting){

        $result = $this->update($request , $setting);

        if($result->original == "Updated"){
            toastr()->success(__('admin.update_successful_msg'), __('admin.success'));
        }else
        {
            toastr()->error(__('admin.update_error_msg'), __('admin.error'));
        }
        return back();
    }

}
