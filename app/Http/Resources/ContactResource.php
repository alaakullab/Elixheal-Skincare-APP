<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
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
            'language_id' => $this->language_id,
            'full_name' => $this->full_name,
            'email_contacts' => $this->email_contacts,
            'message' => $this->message,
            'created_at' => $this->created_at->diffForHumans(),
        ];
    }
}
