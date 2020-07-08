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

Route::group(['middleware' => ['web']], function(){

Route::get('/', function () {
    return view('homepage');
});
Auth::routes();
Route::get('homepage', 'PagesController@home')->name('homepage');
Route::get('dashboard', 'PagesController@dashboard')->name('dashboard');
Route::get('members', 'MemberController@member')->name('members');
Route::get('SignUp', 'PagesController@SignUp')->name('SignUp');
Route::get('SignIn', 'PagesController@SignIn')->name('SignIn');

Route::post('SignUp', 'MemberController@SignUp')->name('SignUp');
Route::post('SignIn', 'MemberController@SignIn')->name('SignIn');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
