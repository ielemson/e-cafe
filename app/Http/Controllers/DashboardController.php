<?php
namespace App\Http\Controllers;

use App\User;
use App\Notification;
use App\Service_plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$user_id = auth::user()->id;
$counts = Notification::where('user_id',$user_id)->count();
$notifys = Notification::where('user_id',$user_id)->get();
$service_plan = Service_plan::all();
return view('dashboard.home')
->with('count_msg' , $counts)
->with('notifys' , $notifys)
->with('service_plan' , $service_plan);

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
*userprofile
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{

}
    

/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$title = "Edit User Info";
$user = User::findorFail($id);
$user_id = auth::user()->id;
$counts = Notification::where('user_id',$user_id)->count();
$notifys = Notification::where('user_id',$user_id)->get();
return view('dashboard.profile.edit')
->with('user',$user)
->with('title',$title)
->with('count_msg' , $counts)
->with('notifys' , $notifys);
}

/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, User $user)
{
$data = $this->validate($request,[
'address'=>'required|max:200',
'email'=>'required',
'first_name'=>'required',
'last_name'=>'required',
'name'=>'required',
'country'=>'required',
'about_me'=>'required',
'city'=>'required',
'postal_code'=>'required|numeric',
'gender'=>'required'
]);
$user = Auth::user();
$UserUpdate = User::where('id',Auth::user()->id)->update($data);

$user = User::findorFail(Auth::user()->id);
if($UserUpdate){
return back()->with('success' , 'Updated Successfully');
}

// if($UserUpdate){
//
//     // return view('dashboard.profile.index',compact('user'))->with('success' , 'Profile Updated');
// return redirect()->route('dashboard.profile.index', compact('user'))->with('success' , 'Profile Updated Successfully');
// }

    return back()->withInput()->with('success' , 'Error Updating');
// return redirect()->route('dashboard.home', compact('user'))->with('errors' , 'Errors Profile Updated');

}

/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
//
}


//CUSTOM VIEWS

public function profile(User $user){
//redirects to the profile page with a variable passed
$user_id = auth::user()->id;
$user = User::findOrFail(Auth::user()->id);
$counts = Notification::where('user_id',$user_id)->count();
$notifys = Notification::where('user_id',$user_id)->get();
return view('dashboard.profile.index')->with('user' ,$user)->with('count_msg' , $counts)->with('notifys' , $notifys);
}
}
