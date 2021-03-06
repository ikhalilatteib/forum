<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\Auth\PassportAuthController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group, which
| is assigned the “api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->group(function () {
    /*
    |  logout post method
    */
    Route::post('/logout', [PassportAuthController::class, 'logout']);
    
    /**
     *  User Controller Group
     */
    Route::controller(UserController::class)->group(function () {
        Route::get('/profile','userProfile')->name('user.profile');
        Route::put('/profile/update', 'updateUserProfile')->name('update.user.profile');
        Route::put('/profile/email', 'userUpdateEmail')->name('update.user.email');
        Route::put('/profile/password', 'userUpdatePassword')->name('update.user.password');
        Route::delete('/profile/delete', 'destroyUser')->name('delete.user.profile');
        Route::get('/user/questions','getAllQuestionForAuthUser')->name('user.questions');
        Route::get('/user/answers','getAllAnswerForAuthUser')->name('user.answers');
    });
    
    /**
     * Question route group
     */
    Route::controller(QuestionController::class)->prefix('question')->group(function () {
        Route::post('/save', 'storeQuestion')->name('store.question');
        Route::put('/{question:slug}/update', 'updateQuestion')->name('update.question');
        Route::delete('/{question:slug}/delete', 'deleteQuestion')->name('delete.question');
    });
    
    /**
     * Answer route group
     */
    Route::controller(AnswerController::class)->prefix('answer')->group(function () {
        Route::post('/{question:slug}/store', 'storeAnswer')->name('answer.question.store');
        Route::get('/{answer}/show', 'showAnswer')->name('answer.question.show');
        Route::put('/{answer}/update', 'updateAnswer')->name('answer.question.update');
        Route::delete('/{answer}/delete', 'deleteAnswer')->name('answer.question.delete');
    });
});

/**
 *   Tag route group
 */

Route::resources(['tags' => TagController::class]);
Route::get('/tags/{tag:slug}',[TagController::class,'questionPerTag'])->name('question.per.tag');
Route::controller(QuestionController::class)->prefix('question')->group(function () {
    Route::get('/index', 'indexQuestion')->name('index.question');
    Route::get('/popular','popularQuestion')->name('popular.question');
    Route::get('/{question:slug}/{sessionId}', 'showQuestion')->name('show.question');
});

/*
| Login and register post method
*/
Route::controller(PassportAuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});

