<?php

namespace App\Http\Controllers;

use App\Wallet;
use App\User;
use App\Notification;
use App\Service_plan;
use Auth;
use Illuminate\Http\Request;

class WalletController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{

$user_name = auth::user()->name;

//$user = User::OrderBy('id','desc')->first();
$service_plan = Service_plan::all();
$user_id = auth::user()->id;
$counts = Notification::where('user_id',$user_id)->count();
$notifys = Notification::where('user_id',$user_id)->get();
return view('dashboard.wallet.index')
->with('title',$user_name)
->with('count_msg' , $counts)
->with('notifys' , $notifys)
->with('service_plan' , $service_plan);
}

public function view_plans($id)
{
$services_plan = Service_plan::where('id' , $id)->first();

return response()->json(['success'=>'got ya' , 'services_plan'=>$services_plan->naira_value , 'tcn_equivalent'=>$services_plan->tcn_equivalent , 'plan_id'=>$services_plan->id]);
}


public function fund($id)
{

$title = "fund your wallet";
$user_id = auth::user()->id;
$counts = Notification::where('user_id',$user_id)->count();
$notifys = Notification::where('user_id',$user_id)->get();
$wallet_fund = Service_plan::where('id' , $id)->first();
return view('dashboard.wallet.fund')
->with('fund_wallet' ,$wallet_fund)
->with('title',$title)
->with('count_msg' , $counts)
->with('notifys' , $notifys);
}




public function update(Request $request, Wallet $wallet)
{
$this->validate($request,[
'bankname'=>'required|max:200',
'accnumb'=>'required',
'accname'=>'required',
]);
//    
$wallet_data =array(
'bank_name' => $request->get('bankname'),
'acc_name'  => $request->get('accname'),
'acc_no'  => $request->get('accnumb'),
'active_status'  => 1,
'confirm_status'  => 2
);
//
$WalletUpdate = Wallet::where('id',Auth::user()->id)->update($wallet_data);
$user_name = auth::user()->name;


//NOTIFICATION INSERTION*********
//create notification
$notify = new Notification;
$user_id = auth::user()->id;
$notify->user_id = $user_id;
$notify->notification  = 'Your wallet has been activted.. kindly fund your wallet to enable  you purchase our services <a href="http://localhost:8000">Link</a>';
$notify->notification_type = "Wallet Activated";    
$notify->save();

$counts = Notification::where('user_id',$user_id)->count();
//$notify = Notification::where('user_id',$user_id)->get();
$notifys = Notification::where('user_id',$user_id)->get();
return view('dashboard.wallet.index')->with('title',$user_name)->with('count_msg' , $counts)->with('notifys' , $notifys);

//return back()->with('success' , 'Updated Successfully')->with('title',$user_name);

return response()->json(['error'=>'An Error ocured.. please try again'],500);
}

/**
* Remove the specified resource from storage.
*
* @param  \App\Wallet  $wallet
* @return \Illuminate\Http\Response
*/
public function destroy(Wallet $wallet)
{
//
}
}
