<?php

use App\Http\Resources\Faqs_questionResource;
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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
    // if (! in_array($locale, ['en', 'es', 'fr'])) {
    //     abort(404);
    // }

    Route::get('admin', function () {
        return view('admin.dashboard');
    })->name('admin');

    Route::get('createQuestion', [\App\Http\Controllers\QuestionController::class,'create'])->name('createQuestion');
    Route::get('admin/setting/edit',[\App\Http\Controllers\SettingController::class, 'viewEdit'])->name('admin.setting.edit');
    Route::put('admin/setting/update',[\App\Http\Controllers\SettingController::class, 'viewUpdate'])->name('admin.setting.update');
    Route::get('admin/faqs_questions/add',[\App\Http\Controllers\FaqsQuestionController::class, 'viewAdd'])->name('admin.faqs_questions.add');




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
