<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnswerResource extends JsonResource
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
            'answer_value' => $this->answer_value,
            'question_id' => $this->question_id,
            'language_id' => $this->language_id,
            'question_next_id' => $this->question_next_id,
            'created_at' => $this->created_at->diffForHumans(),
            'user' => $this->user->name,
        ];
    }
}
