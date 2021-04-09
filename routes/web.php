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

Route::redirect('/', 'en', 301);

Route::group(['prefix' => '{language}'], function () {
    // if (! in_array($locale, ['en', 'es', 'fr'])) {
    //     abort(404);
    // }

    Route::redirect('admin', 'quiz', 301);

    // admin panel
    Route::prefix('admin')->name('admin.')->group(function () {

        Auth::routes();
//        Route::redirect('/', '/en/admin/login', 301);

        Route::middleware('auth:web')->group(function () {

            Route::get('home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
            Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

            Route::get('category', [\App\Http\Controllers\CategoryController::class, 'indexView'])->name('category.indexView');
            Route::get('category/add', [\App\Http\Controllers\CategoryController::class, 'createView'])->name('category.createView');
            Route::post('category/store', [\App\Http\Controllers\CategoryController::class, 'storeView'])->name('category.storeView');
            Route::get('category/{id}/edit', [\App\Http\Controllers\CategoryController::class, 'editView'])->name('category.editView');
            Route::put('category/{id}/update', [\App\Http\Controllers\CategoryController::class, 'updateView'])->name('category.updateView');
            Route::any('category/{id}/delete', [\App\Http\Controllers\CategoryController::class, 'deleteView'])->name('category.deleteView');

            //products
            Route::get('product', [\App\Http\Controllers\ProductController::class, 'indexView'])->name('product.indexView');
            Route::get('product/add', [\App\Http\Controllers\ProductController::class, 'createView'])->name('product.createView');
            Route::post('product/store', [\App\Http\Controllers\ProductController::class, 'storeView'])->name('product.storeView');
            Route::get('product/{id}/edit', [\App\Http\Controllers\ProductController::class, 'editView'])->name('product.editView');
            Route::put('product/{id}/update', [\App\Http\Controllers\ProductController::class, 'updateView'])->name('product.updateView');
            Route::any('product/{id}/delete', [\App\Http\Controllers\ProductController::class, 'deleteView'])->name('product.deleteView');

            //orders
            Route::get('orders', [\App\Http\Controllers\ProductController::class, 'indexView'])->name('orders.indexView');
            Route::get('contact', [\App\Http\Controllers\ContactController::class, 'indexView'])->name('contact.indexView');
            Route::get('contact/add', [\App\Http\Controllers\ContactController::class, 'createView'])->name('contact.createView');
            Route::post('contact/store', [\App\Http\Controllers\ContactController::class, 'storeView'])->name('contact.storeView');
            Route::get('contact/{id}/edit', [\App\Http\Controllers\ContactController::class, 'editView'])->name('contact.editView');
            Route::put('contact/{id}/update', [\App\Http\Controllers\ContactController::class, 'updateView'])->name('contact.updateView');
            Route::any('contact/{id}/delete', [\App\Http\Controllers\ContactController::class, 'deleteView'])->name('contact.deleteView');
            Route::get('question', [\App\Http\Controllers\QuestionController::class, 'indexView'])->name('question.indexView');
            Route::get('question/add', [\App\Http\Controllers\QuestionController::class, 'createView'])->name('question.createView');
            Route::post('question/store', [\App\Http\Controllers\QuestionController::class, 'storeView'])->name('question.storeView');
            Route::get('question/{id}/edit', [\App\Http\Controllers\QuestionController::class, 'editView'])->name('question.editView');
            Route::put('question/{id}/update', [\App\Http\Controllers\QuestionController::class, 'updateView'])->name('question.updateView');
            Route::any('question/{id}/delete', [\App\Http\Controllers\QuestionController::class, 'deleteView'])->name('question.deleteView');
            Route::get('answer/{id}', [\App\Http\Controllers\AnswerController::class, 'indexView'])->name('answer.indexView');
            Route::get('answer/{id}/add', [\App\Http\Controllers\AnswerController::class, 'createView'])->name('answer.createView');
            Route::post('answer/{id}/store', [\App\Http\Controllers\AnswerController::class, 'storeView'])->name('answer.storeView');
            Route::get('answer/{id}/edit', [\App\Http\Controllers\AnswerController::class, 'editView'])->name('answer.editView');
            Route::put('answer/{id}/update', [\App\Http\Controllers\AnswerController::class, 'updateView'])->name('answer.updateView');
            Route::any('answer/{id}/delete', [\App\Http\Controllers\AnswerController::class, 'deleteView'])->name('answer.deleteView');
            Route::get('createQuestion', [\App\Http\Controllers\QuestionController::class, 'create'])->name('createQuestion');
            Route::get('setting/edit', [\App\Http\Controllers\SettingController::class, 'viewEdit'])->name('setting.edit');
            Route::put('setting/update', [\App\Http\Controllers\SettingController::class, 'viewUpdate'])->name('setting.update');

            // FAQS
            Route::get('faqs_questions/list', [\App\Http\Controllers\FaqsQuestionController::class, 'indexView'])->name('faqs_questions.indexView');
            Route::get('faqs_questions/add', [\App\Http\Controllers\FaqsQuestionController::class, 'createView'])->name('faqs_questions.add');
            Route::post('faqs_questions/store', [\App\Http\Controllers\FaqsQuestionController::class, 'storeView'])->name('faqs_questions.store');
            Route::get('faqs_questions/{id}/edit', [\App\Http\Controllers\FaqsQuestionController::class, 'editView'])->name('faqs_questions.edit');
            Route::put('faqs_questions/{id}/update', [\App\Http\Controllers\FaqsQuestionController::class, 'updateView'])->name('faqs_questions.updateView');
            Route::any('faqs_questions/{id}/delete', [\App\Http\Controllers\FaqsQuestionController::class, 'deleteView'])->name('faqs_questions.deleteView');

            Route::get('faqs_answers/{id}', [\App\Http\Controllers\FaqsAnswerController::class, 'indexView'])->name('faqs_answers.indexView');
            Route::get('faqs_answers/{id}/add', [\App\Http\Controllers\FaqsAnswerController::class, 'createView'])->name('faqs_answers.add');
            Route::post('faqs_answers/{id}/store', [\App\Http\Controllers\FaqsAnswerController::class, 'storeView'])->name('faqs_answers.store');
            Route::get('faqs_answers/{id}/edit', [\App\Http\Controllers\FaqsAnswerController::class, 'editView'])->name('faqs_answers.edit');
            Route::put('faqs_answers/{id}/update', [\App\Http\Controllers\FaqsAnswerController::class, 'updateView'])->name('faqs_answers.updateView');

            Route::get('slider', [\App\Http\Controllers\SliderController::class, 'indexView'])->name('slider.indexView');
            Route::get('slider/add', [\App\Http\Controllers\SliderController::class, 'createView'])->name('slider.createView');
            Route::post('slider/store', [\App\Http\Controllers\SliderController::class, 'storeView'])->name('slider.storeView');
            Route::get('slider/{id}/edit', [\App\Http\Controllers\SliderController::class, 'editView'])->name('slider.editView');
            Route::put('slider/{id}/update', [\App\Http\Controllers\SliderController::class, 'updateView'])->name('slider.updateView');
            Route::any('slider/{id}/destroy', [\App\Http\Controllers\SliderController::class, 'destroy'])->name('slider.destroy');
            Route::any('slider/{id}/delete', [\App\Http\Controllers\SliderController::class, 'deleteView'])->name('slider.deleteView');

            Route::get('about', [\App\Http\Controllers\AboutController::class, 'indexView'])->name('about.indexView');
            Route::get('about/add', [\App\Http\Controllers\AboutController::class, 'createView'])->name('about.createView');
            Route::post('about/store', [\App\Http\Controllers\AboutController::class, 'storeView'])->name('about.storeView');
            Route::get('about/{id}/edit', [\App\Http\Controllers\AboutController::class, 'editView'])->name('about.editView');
            Route::put('about/{id}/update', [\App\Http\Controllers\AboutController::class, 'updateView'])->name('about.updateView');
            Route::any('about/{id}/delete', [\App\Http\Controllers\AboutController::class, 'deleteView'])->name('about.deleteView');
            Route::get('quiz/results', [\App\Http\Controllers\ResultQuestionsController::class, 'indexView'])->name('quiz.results.indexView');
        });
    });

    // front
    Route::get('/quiz', [\App\Http\Controllers\front\QuizController::class, 'indexView']);
    Route::get('/contact', [\App\Http\Controllers\front\FrontController::class, 'contactCreateView'])->name('pages.contact.CreateView');
    Route::post('/contact/store', [\App\Http\Controllers\ContactController::class, 'storeView'])->name('pages.Contact.StoreView');
    Route::get('/faqs', [\App\Http\Controllers\front\FrontController::class, 'faqsView'])->name('pages.faqs.View');
    Route::get('/about', [\App\Http\Controllers\front\FrontController::class, 'aboutView'])->name('pages.about.CreateView');

    Route::get('/', [\App\Http\Controllers\front\FrontController::class, 'indexView']);

});
// Route::get('/greeting/{locale}', function ($locale) {
//     if (! in_array($locale, ['en', 'es', 'fr'])) {
//         abort(404);
//     }
//     App::setLocale($locale);
//     dd(App::getLocale($locale));
// });


