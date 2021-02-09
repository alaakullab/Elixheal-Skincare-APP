<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $appends = ['image_url'];

    public function category()
    {
        return $this->belongsTo(category::class);
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


    public function setImageProductAttribute($value)
    {
        $this->attributes['image_product'] = storeFile($value, 'images/product', $this->image_product);
    }
    public function getImageUrlAttribute()
    {
        return empty($this->image_product)?null:file_url($this->image_product);
    }

}
