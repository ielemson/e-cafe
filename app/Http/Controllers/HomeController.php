<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

public function index()
{
  
//rediects the login page to the dashboard
    
$title = "home";
return view('welcome')->with('title' , $title);
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
* @param  \App\Home  $home
* @return \Illuminate\Http\Response
*/
public function show(Home $home)
{
//redirects to the profile page with a variable passed
$user = User::findOrFail(Auth::user()->id);
return view('dashboard.profile.index' , compact('user'));
}

/**
* Show the form for editing the specified resource.
*
* @param  \App\Home  $home
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$user = User::findorFail($id);
return view('dashboard.profile.edit',compact('user'));
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Home  $home
* @return \Illuminate\Http\Response
*/
public function update(Request $request, User $user)
{
$this->validate($request,[
'address'=>'required|max:200',
'email'=>'required',
'first_name'=>'required',
'last_name'=>'required',
'name'=>'required',
'country'=>'required',
'about_me'=>'required',
'city'=>'required',
'zip'=>'required',
'gender'=>'required'

]);
$user = Auth::user();
$UserUpdate = User::where('id',Auth::user()->id)->update([
'name'=>$request->input('name'),
'address'=>$request->input('address'),
'gender'=>$request->input('gender'),
'email'=>$request->input('email'),
'first_name'=>$request->input('first_name'),
'last_name'=>$request->input('last_name'),
'country'=>$request->input('country'),
'about_me'=>$request->input('about_me'),
'city'=>$request->input('city'),
'postal_code'=>$request->input('zip'),
]);
if($UserUpdate){
$user = User::findorFail(Auth::user()->id);
//     return view('dashboard.profile',compact('user'))->with('success' , 'Profile Updated');
return redirect()->route('dashboard.edit', compact('user'))->with('success' , 'Profile Updated Successfully');
}

//     return back()->withInput()->with('success' , 'Error Updating');
return redirect()->route('dashboard.edit', compact('user'))->with('errors' , 'Errors Profile Updated');

}

/**
* Remove the specified resource from storage.
*
* @param  \App\Home  $home
* @return \Illuminate\Http\Response
*/
public function destroy(Home $home)
{
//
}
}
