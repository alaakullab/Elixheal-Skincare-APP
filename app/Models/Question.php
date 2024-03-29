<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answer()
    {
        return $this->hasMany(Answer::class);
    }

    public function const_languages()
    {
        return $this->belongsTo(const_languages::class);
    }

    public function result_question()
    {
        return $this->hasMany(result_questions::class);
    }


    public function getPathAttribute()
    {
        return asset("api/question/$this->id");
    }
}
