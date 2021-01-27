<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsTo(categories::class);
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
        return asset("api/product/$this->slug");
    }
}