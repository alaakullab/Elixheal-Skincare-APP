<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class faqs_answerResource extends JsonResource
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
            'answers_value' => $this->answers_value,
            'path' => $this->path,
            'created_at' => $this->created_at->diffForHumans(),
            'user' => $this->user->name,
        ];
    }
}
