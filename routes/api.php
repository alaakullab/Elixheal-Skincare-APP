<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqsAnswerController;
use App\Http\Controllers\FaqsQuestionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('category',CategoryController::class);
Route::apiResource('question',QuestionController::class);
Route::apiResource('question/{question}/answer',AnswerController::class);
Route::apiResource('faqs_questions',FaqsQuestionController::class);
Route::apiResource('faqs_question/{faqs_question}/faqs_answer',FaqsAnswerController::class);
Route::apiResource('contact',ContactController::class);
Route::apiResource('setting',SettingController::class);
Route::apiResource('product',ProductController::class);



Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::CLass, 'login']);
    Route::post('logout', [AuthController::CLass, 'logout']);
    Route::post('refresh', [AuthController::CLass, 'refresh']);
    Route::post('me', [AuthController::CLass, 'me']);

});

