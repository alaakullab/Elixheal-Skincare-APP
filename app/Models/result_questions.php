<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class result_questions extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function const_languages()
    {
        return $this->hasMany(const_languages::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function qustiones()
    {
        return $this->hasMany(Question::class);
    }
}
