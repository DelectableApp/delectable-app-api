<?php

use Illuminate\Http\Request;

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
/* -------------------------
 * Api routes (test)
 * ----------------------- */
Route::middleware('api')->get('/', function (Request $request) {
    return ['msg' => 'hello world !!! :D'];
});
/* -------------------------
 * OAUTH2 routes
 * ----------------------- */
Route::middleware('api')->group(function () {
    Route::prefix('oauth2')->group(function () {
        Route::post('/authentication', 'Oauth2\LoginController@index');
        Route::post('/register', 'Oauth2\RegisterController@index');
        Route::post('/forgot_password', 'Oauth2\ForgotPasswordController@index');
        Route::post('/reset_password', 'Oauth2\ResetPasswordController@index');
    });
});

/* -------------------------
 * API routes
 * ----------------------- */
Route::prefix('v1')->group(function () {

    /* -------------------------
     * PUBLIC routes
     * ----------------------- */
    Route::middleware('api')->group(function () {



        // Images
        Route::prefix('images')->group(function () {
            Route::get('/', 'Api\Asset\ImageController@index')->name('images');
            Route::get('/{id}', 'Api\Asset\ImageController@show')->where('id', '[0-9]+')->name('single_image');
        });
    });

    /* -------------------------
    * PRIVATE routes
    * ----------------------- */
    Route::middleware('auth:api')->group(function () {

        // Users
        Route::prefix('users')->group(function () {
            Route::get('/', 'Api\User\UserController@index')->name('users');
            Route::get('/me', 'Api\User\UserController@whoami')->where('id', '[0-9]+')->name('current_user');
            Route::get('/{id}', 'Api\User\UserController@show')->where('id', '[0-9]+')->name('single_user');
            Route::put('/{id}', 'Api\User\UserController@update')->where('id', '[0-9]+');
            Route::delete('/{id}', 'Api\User\UserController@destroy')->where('id', '[0-9]+');
        });
    });
});

