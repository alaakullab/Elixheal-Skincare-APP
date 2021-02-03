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

Route::group(['prefix' => '{language}'], function () {
    // if (! in_array($locale, ['en', 'es', 'fr'])) {
    //     abort(404);
    // }

    Route::get('admin', function () {
        return view('admin.dashboard');
    })->name('admin');

    Route::get('admin/category', [\App\Http\Controllers\CategoryController::class,'indexView'])->name('admin.category.indexView');
    Route::get('admin/category/add', [\App\Http\Controllers\CategoryController::class,'createView'])->name('admin.category.createView');
    Route::post('admin/category/store', [\App\Http\Controllers\CategoryController::class,'storeView'])->name('admin.category.storeView');
    Route::get('admin/category/{id}/edit', [\App\Http\Controllers\CategoryController::class,'editView'])->name('admin.category.editView');
    Route::put('admin/category/{id}/update', [\App\Http\Controllers\CategoryController::class,'updateView'])->name('admin.category.updateView');

    Route::get('admin/contact', [\App\Http\Controllers\ContactController::class,'indexView'])->name('admin.contact.indexView');
    Route::get('admin/contact/add', [\App\Http\Controllers\ContactController::class,'createView'])->name('admin.contact.createView');
    Route::post('admin/contact/store', [\App\Http\Controllers\ContactController::class,'storeView'])->name('admin.contact.storeView');
    Route::get('admin/contact/{id}/edit', [\App\Http\Controllers\ContactController::class,'editView'])->name('admin.contact.editView');
    Route::put('admin/contact/{id}/update', [\App\Http\Controllers\ContactController::class,'updateView'])->name('admin.contact.updateView');

    Route::get('admin/question', [\App\Http\Controllers\QuestionController::class,'indexView'])->name('admin.question.indexView');
    Route::get('admin/question/add', [\App\Http\Controllers\QuestionController::class,'createView'])->name('admin.question.createView');
    Route::post('admin/question/store', [\App\Http\Controllers\QuestionController::class,'storeView'])->name('admin.question.storeView');
    Route::get('admin/question/{id}/edit', [\App\Http\Controllers\QuestionController::class,'editView'])->name('admin.question.editView');
    Route::put('admin/question/{id}/update', [\App\Http\Controllers\QuestionController::class,'updateView'])->name('admin.question.updateView');


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
