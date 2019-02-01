<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Wallet;
use App\Notification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
/*
|--------------------------------------------------------------------------
| Register Controller
|--------------------------------------------------------------------------
|
| This controller handles the registration of new users as well as their
| validation and creation. By default this controller uses a trait to
| provide this functionality without requiring any additional code.
|
*/

use RegistersUsers;

/**
* Where to redirect users after registration.
*
* @var string
*/
protected $redirectTo = '/user';

/**
* Create a new controller instance.
*
* @return void
*/
public function __construct()
{
$this->middleware('guest');
}

/**
* Get a validator for an incoming registration request.
*
* @param  array  $data
* @return \Illuminate\Contracts\Validation\Validator
*/
    
    
public function messages()
{
    return [
        'email.required' => 'Er, you forgot your email address!',
        'email.unique' => 'Email already taken m8',
    ];
}
    
protected function validator(array $data)
{
return Validator::make($data, [
'name' => 'required|string|max:255',
'first_name' => 'required|string|max:255',
'last_name' => 'required|string|max:255',
'gender' => 'required|string|',
'email' => 'required|string|email|max:255|unique:users',
'password' => 'required|string|min:6|confirmed',
'captcha' => 'required|captcha'
]);
}
    
    

/**
* Create a new user instance after a valid registration.
*
* @param  array  $data
* @return \App\User
*/
protected function create(array $data)
{
$user =  User::create([
'name' => $data['name'],
'first_name' => $data['first_name'],
'last_name' => $data['last_name'],
'gender' => $data['gender'],
'email' => $data['email'],
'password' => bcrypt($data['password']),
]);
$this->lastCreatedUserId = $user->id;
    
//create wallet
$wallet = new Wallet;
$wallet->user_id = $user->id;
$wallet->user_tag  = Str::random(6);
$wallet->save();
    
    
//create notification
$notify = new Notification;

$notify->user_id = $user->id;
$notify->notification  = 'Welcome to e-cafe where life is made easy.. we help you carry out any type of task or request.. kindly feel free to explore our services .. To get started first click on activate wallet to update your wallet crednetials, then click on fund walelt to buy TCN coin which enable you purchase any of our services... for more information kindly contact our help center <a href="http://localhost:8000">Link</a>';
$notify->notification_type = "Welcome Message";
$notify->save();
    
return $user;
}
}
