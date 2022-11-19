<?php

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

Route::get('/login', function () {
    return redirect()->to('/login');
});

Route::get('/', 'Front\FrontController@index')->name('front.index');
Route::get('/resultado', 'Front\FrontController@resultado')->name('front.resultado');
Route::post('/resultado', 'Front\FrontController@resultadoStore')->name('front.resultadoStore');
Route::get('/download', 'Front\FrontController@download')->name('front.download');



Route::post('/surveyCreate', 'Front\FrontController@store')->name('front.surveyCreate');

include('marcelo-gerador.php');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
