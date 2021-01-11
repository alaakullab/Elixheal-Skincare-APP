<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answers()
    {
        return $this->hasMany(answers::class);
    }

    public function const_languages()
    {
        return $this->belongsTo(const_languages::class);
    }

    public function getPathAttribute()
    {
        return asset("api/question/$this->slug");
    }
}
