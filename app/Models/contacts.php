<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function const_languages()
    {
        return $this->belongsTo(const_languages::class);
    }

}
