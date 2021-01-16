<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'site_name' => $this->site_name,
            'site_desc' =>  $this->site_desc,
            'logo' =>  $this->logo,
            'icon' =>  $this->icon,
            'copyright' =>  $this->copyright,
            'email' =>  $this->email,
            'meta_keyword' =>  $this->meta_keyword,
            'meta_robots' =>  $this->meta_robots,
            'Maintenance_message' =>  $this->Maintenance_message,
            'phone' =>  $this->phone,
            'maintenance_status' =>  $this->maintenance_status,
            'facebook' =>  $this->facebook,
            'twitter' =>  $this->twitter,
            'instagram' =>  $this->instagram,
            'whatsapp' =>  $this->whatsapp,
            'language_id' => $this->language_id,
            'created_at' => $this->created_at->diffForHumans(),
            'user' => $this->user->name,

        ];
    }
}
