<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Wallet;
use App\Notification;
class User extends Authenticatable
{
use Notifiable;

/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'name', 'email', 'password','first_name','last_name','address','country','city','zip','gender',
];
/**
* The attributes that should be hidden for arrays.
*
* @var array
*/
protected $hidden = [
'password', 'remember_token',
];
    
    
    
public function wallet(){
return $this->hasOne('App\Wallet');
}
    
public function notify(){
return $this->hasMany('App\Notification');
}
}

