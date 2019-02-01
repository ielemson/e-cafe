<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
class NotificationController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index($id)
{
$user_id = auth::user()->id;
$counts = Notification::where('user_id',$user_id)->count();
$notifys = Notification::where('user_id',$user_id)->get();
$notify = Notification::where('id',$id)->get();
return view('dashboard/notification/index')->with('count_msg' , $counts)->with('notify' , $notify)->with('notifys' , $notifys);

}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
//
}

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
//
}

/**
* Display the specified resource.
*
* @param  \App\Notification  $notification
* @return \Illuminate\Http\Response
*/
public function show(Notification $notification)
{
//
}

/**
* Show the form for editing the specified resource.
*
* @param  \App\Notification  $notification
* @return \Illuminate\Http\Response
*/
public function edit(Notification $notification)
{
//
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Notification  $notification
* @return \Illuminate\Http\Response
*/
public function update(Request $request, Notification $notification)
{
//
}

/**
* Remove the specified resource from storage.
*
* @param  \App\Notification  $notification
* @return \Illuminate\Http\Response
*/
public function destroy(Notification $notification)
{
//
}
}
