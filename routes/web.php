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

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/user-registration', 'PagesController@user_reg')->name('reg_user');
Route::get('/user-login', 'PagesController@user_login')->name('user_login');
Route::get('/reset-password', 'PagesController@reset_pass')->name('reset_password');
Route::resource('/admin', 'AdminController');

//Captcha url
Route::get('/refreshcaptcha', 'CaptchaController@refreshCaptcha');
//Route::get('createcaptcha', 'CaptchaController@create');
//Route::post('captcha', 'CaptchaController@captchaValidate');
//Route::get('refreshcaptcha', 'CaptchaController@refreshCaptcha');

//RESTRICTED PAGES AFTER LOGIN
Route::middleware(['auth'])->group(function(){

    
//DASHBOARD CONTROLLER
Route::resource('/user', 'DashboardController');
Route::get('user/profile/{id}/edit', 'DashboardController@edit');

    
Route::get('user/notification/{id}', 'NotificationController@index');
    
// Route::resource('/admin', 'AdminController');
    
    
//WALLET CONTROLLER
Route::get('/user/wallet/{id}' , 'WalletController@index');
Route::post('/wallet/update/{id}', 'WalletController@update')->name('wallet.update');
Route::post('/wallet/view_plans/{id}', 'WalletController@view_plans');
Route::get('/wallet/fund/{id}', 'WalletController@fund');

    
    
//PROFILE PAGE ROUTE
Route::get('user/profile/{id}', 'DashboardController@profile');
    
    
    
// Route::group([
// 'prefix'=>'/dashboard'
// ], function(){
//
// //LOGIN AUTHENTICATION ROUTE
//
//
// });
});