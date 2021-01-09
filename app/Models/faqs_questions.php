<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faqs_questions extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function faqs_answers()
    {
        return $this->hasMany(faqs_answers::class);
    }

    public function const_languages()
    {
        return $this->belongsTo(const_languages::class);
    }
}
