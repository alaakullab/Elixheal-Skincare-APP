<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::redirect('/', 'en', 301);

Route::group(['prefix' => '{language}'], function () {
    // if (! in_array($locale, ['en', 'es', 'fr'])) {
    //     abort(404);
    // }

    Route::get('admin', function () {
        return view('admin.dashboard');
    })->name('admin');

    Route::get('admin/setting/edit',[\App\Http\Controllers\SettingController::class, 'edit'])->name('admin.setting.edit');
    Route::get('createQuestion', [\App\Http\Controllers\QuestionController::class,'create'])->name('createQuestion');




    Route::get('welcome', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('aa', function () {
        return view('welcome');
    })->name('welcome');

});



// Route::get('/greeting/{locale}', function ($locale) {
//     if (! in_array($locale, ['en', 'es', 'fr'])) {
//         abort(404);
//     }
//     App::setLocale($locale);
//     dd(App::getLocale($locale));
// });
