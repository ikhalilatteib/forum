<?php

use App\Http\Controllers\Auth\PassportAuthController;
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


});


/*
|  Login and register post method
 */

Route::controller(PassportAuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});

