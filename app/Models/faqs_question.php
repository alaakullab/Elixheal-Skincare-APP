<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faqs_question extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function faqs_answer()
    {
        return $this->hasMany(faqs_answer::class);
    }

    public function const_languages()
    {
        return $this->belongsTo(const_languages::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPathAttribute()
    {
        return asset("api/faqs_questions/$this->id");
    }
}
