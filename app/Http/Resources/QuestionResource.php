<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'question_value' => $this->question_value,
            'path' => $this->path,
            'question_type' => $this->question_type,
            'created_at' => $this->created_at->diffForHumans(),
            'user' => $this->user->name,
        ];
    }
}
