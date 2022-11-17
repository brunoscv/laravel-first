<?php

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

Route::post('login', 'Api\PassportController@login');
Route::get('unauthenticated', 'Api\PassportController@unAuthenticated')->name('unAuthenticated');

Route::post('register', 'Api\PassportController@register');
Route::post('password-recovery', 'Api\PassportController@sendTokenPasswordRecovery');
Route::post('email-verify', 'Api\PassportController@emailVerify');
Route::post('validate-password-recovery', 'Api\PassportController@validatedTokenConfirmationPasswordRecovery');


Route::post('social-auth/facebook', 'Api\PassportController@loginSocialFacebook');
Route::post('social-auth/google', 'Api\PassportController@loginSocialGoogle');

Route::get('/cities/find', 'Api\ApiCityController@find')->name('cities.find');


Route::middleware(['auth:api'])->namespace('Api')->group(function ($api) {

    $api->get('me', 'PassportController@me');

    $api->group([
        'prefix' => 'users',
    ], function ($user) {

        $user->put('personal', 'ApiUserController@updatePersonal');
        // $user->put('onesignal', 'ApiUserController@oneSignal');
        $user->put('password', 'ApiUserController@updatePassword');
        //$user->post('image/change', 'ApiUserController@updateImage');
        //$user->get('/find', 'ApiUserController@find')->name('api.users.find');

    });




});
