<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\Auth\PassportAuthController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TagController;
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


Route::middleware('auth:api')->group(function () {


    /*
    |  logout post method
    */

    Route::post('/logout', [PassportAuthController::class, 'logout']);

    /**
     *   Tag route group
     */

    Route::resources(['tags' => TagController::class]);

    /**
     * Question route group
     */

    Route::controller(QuestionController::class)->prefix('question')->group(function () {
        Route::get('/index', 'indexQuestion')->name('index.question');
        Route::post('/save', 'storeQuestion')->name('store.question');
        Route::get('/{question:slug}', 'showQuestion')->name('show.question');
        Route::put('/{question:slug}/update', 'updateQuestion')->name('update.question');
        Route::delete('/{question:slug}/delete', 'deleteQuestion')->name('delete.question');
    });

    /**
     * Answer route group
     */

    Route::controller(AnswerController::class)->group(function () {
        Route::post('/answer/{question:slug}/store', 'storeAnswer')->name('answer.question.store');
    });
});


/*
|  Login and register post method
*/

Route::controller(PassportAuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});

