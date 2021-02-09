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
function file_url($dir, $default = "")
{
    return $dir === $default ? url('/images/' . $dir) : url('/storage/' . $dir);
}


function storeFile($file, $folder_name, $old_file = null)
{
    if (is_file($file)) {
        @Storage::delete($old_file);
        $new_file = $file->store($folder_name);
    } else {
        $new_file = $file;
    }
    return $new_file;
}
