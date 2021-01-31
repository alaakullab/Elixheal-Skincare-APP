<?php

use Illuminate\Support\Facades\Auth;
use App\Models\const_languages;

if(!function_exists('getLangId')){
    function getLangId(){
        $lang = app()->getLocale();
        $constLang = const_languages::where('code', $lang)->first();
        return isset($constLang['id']) ? $constLang['id'] : 1;
    }

}
