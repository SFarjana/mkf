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
Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/d', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('try');
});

Route::get('/signup', function () {
    return view('try2');
});
*/
Route::get('logout', 'BasicController@logout');

Route::get('login', 'BasicController@login');
Route::post('loginStore', 'BasicController@loginStore');

Route::group(['middleware' => 'checkloggedin'], function(){
	Route::get('admin-panel', 'BasicController@dashboard');
	Route::get('dashboard-event-draft', 'BasicController@eventdraft');
	Route::get('myprofile', 'BasicController@myprofile');
	Route::get('edit-profile', 'BasicController@editprofile');
	Route::get('calender', 'BasicController@calender');
	Route::post('eventStore','BasicController@eventStore');
});
Route::get('welcome', 'BasicController@welcome');
/*
Route::group(['middleware' => 'checkloggedin'], function(){
	Route::get('welcome', 'BasicController@welcome');
});
*/
Route::get('signup', 'BasicController@signup');
Route::post('signupStore','BasicController@signupStore');



