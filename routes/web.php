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
Route::get('/', 'HomeController@index')->name('home');
Route::get('logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect()->route('home');
});
Route::get('/post/{slug}','HomeController@show');
Route::post('sign-up','UserController@store')->name('sign-up');
Route::get('contact-us','PagesController@show');
Route::post('contact-us','PagesController@store');
Route::get('about-japan','PagesController@about');
Route::get('not-available','PagesController@notAvailable')->middleware('auth');

Auth::routes();




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
