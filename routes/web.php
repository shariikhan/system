<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('welcome.dashboard');
});

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::post('FormController', 'FormController@insurance');
//Route::post('getData', 'getDataController@insurance');



Route::get('/admin', function () {
    return redirect('/admin/dashboard');
});

Route::get('/user', function () { return redirect('/user/dashboard'); });

// Route::get('/', function () {
//     return redirect('/login');
// });



Route::get('/admin/dashboard', 'AdminController@index' , function () {
    return view('admin.dashboard');
});


Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');


Route::get('subscription', ['as'=>'subscription','uses'=>'HomeController@subscription']);
Route::post('subscription', ['as'=>'post-subscription','uses'=>'HomeController@postSubscription']);


Route::get('/admin/users_list', 'users_listController@index', function () {
    return view('admin.users_list');
});

Route::get('/admin/profile/{id?}', 'ProfileController@index', function () {
    return view('admin.profile');
});

Route::get('/user/dashboard', function () {
    return view('user.dashboard');
});


Auth::routes();