@extends('dashboard.master')
@section('content')
@include('modals.investment')
@if(auth::user()->wallet->active_status == 0)
<div class="row col-sm-12 col-md-12 displaystyle-leftborder displaystyle-rightborder displaystyle-danger displaystyle-sm">
<b class="fa fa-credit-card"></b>&nbsp; Please activate your <a href="#" style="color:#000000; border-bottom:1px dotted red; font-weight:bolder;"  data-toggle="modal" data-target="#activModal"><b>WALLET</b> </a>information to enable you fund your account</div>
@endif

@if(auth::user()->wallet->confirm_status == 2)
<div class="row col-sm-12 col-md-12 displaystyle-leftborder displaystyle-rightborder displaystyle-info displaystyle-sm">
<b class="fa fa-credit-card"></b>&nbsp;Please ensure to fund your <a href="/user/wallet/{{auth::user()->id}}" style="color:#000000;  border-bottom:1px dotted red; font-weight:bolder;" ><b>WALLET</b> </a>with <b style="color:#000000;">TCN</b> to enable you use our services</div>
@endif
<div class="row">
<div class="col-lg-4 col-sm-6">
<div class="card">
<div class="content">
<div class="row">
<div class="col-xs-5">
<div class="icon-big icon-info text-center">
<i class="fa fa-money"></i>
</div>
</div>
<div class="col-xs-7">
<div class="numbers">
<p>Buy</p>
TCN
</div>
</div>
</div>
<div class="footer">
<hr />
<div class="stats">
@if(auth::user()->wallet->active_status == 0)
<a href="#"  data-toggle="modal" data-target="#viewModal"><button class="btn btn-primary btn-xs" style="border:none;" disabled><i class="ti-money"></i>&nbsp;purchase TCN</button></a>
@else
<a href="#"  data-toggle="modal" data-target="#viewModal"><button class="btn btn-primary btn-xs" style="border:none;"><i class="ti-money"></i>&nbsp;purchase TCN</button></a>
@endif
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="card">
<div class="content">
<div class="row">
<div class="col-xs-5">
<div class="icon-big icon-success text-center">
<i class="ti-wallet"></i>
</div>
</div>
<div class="col-xs-7">
<div class="numbers">
<p>Balance</p>
<b>TCN {{auth::user()->wallet->wallet_amount}}</b>
</div>
</div>
</div>
<div class="footer">
<hr />
<div class="stats">
@if(auth::user()->wallet->active_status == 0)
<a href="wallet.php"><button class="btn btn-primary btn-xs" style="border:none;" disabled><i class="ti-arrow-circle-right"></i>&nbsp;Fund My Wallet</button></a>
@else
<a href="#" data-toggle="modal" data-target="#viewModal"><button class="btn btn-primary btn-xs" style="border:none;"><i class="ti-arrow-circle-right"></i>&nbsp;Fund My Wallet</button></a>
@endif
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="card">
<div class="content">
<div class="row">
<div class="col-xs-5">
<div class="icon-big text-center">
<i class="ti-credit-card"></i>
</div>
</div>
<div class="col-xs-7">
<div class="numbers">
<p>Wallet Status</p>

@if(auth::user()->wallet->active_status == 0)
<b class="text-danger">
inactive
</b>
@else
<b class="text-success">
active
</b>
@endif
</div>
</div>
</div>
<div class="footer">
<hr />

<div class="stats">
@if(auth::user()->wallet->active_status == 0)
<a href="#" data-toggle="modal" data-target="#activModal"><button class="btn btn-xs" style="border:none;"  ><i class="ti-timer"></i>&nbsp;Activate Wallet</button></a>
@else
<a href="#"><button class="btn btn-xs" style="border:none;" disabled><i class="ti-timer"></i>&nbsp;wallet activated</button></a>
@endif
</div>
</div>
</div>
</div>

<!--ACTIVATE WALLET MODAL-->

</div>
<!--
<div class="col-lg-3 col-sm-6">
<div class="card">
<div class="content">
<div class="row">
<div class="col-xs-5">
<div class="icon-big icon-info text-center">
<i class="ti-twitter-alt"></i>
</div>
</div>
<div class="col-xs-7">
<div class="numbers">
<p>Follow Us</p>
+45
</div>
</div>
</div>
<div class="footer">
<hr />
<div class="stats">
<i class="ti-reload"></i> Updated now
</div>
</div>
</div>
</div>
</div>
-->
</div>
<div class="row">

<div class="col-md-4">
<div class="card">
<div class="container-fluid">
<h4 align="center" class="feature-wrap icon-big icon-info text-center"><i class="fa fa-bullhorn"></i></h4>
<h4 align="center"> <b class="btn btn-default service_click" id="1" data-toggle="modal" data-target="#ServiceModal1">Assignment</b></h4>
<p style="text-align:center;">Assignment for all..</p></div>

</div>
</div> 

<div class="col-md-4">
<div class="card">
<div class="container-fluid">
<h4 align="center" class="feature-wrap icon-big icon-info text-center"><i class="fa fa-bullhorn"></i></h4>
<h4 align="center"> <b class="btn btn-default service_click" id="1" data-toggle="modal" data-target="#ServiceModal1">Assignment</b></h4>
<p style="text-align:center;">Assignment for all..</p></div>

</div>
</div> 

<div class="col-md-4">
<div class="card">
<div class="container-fluid">
<h4 align="center" class="feature-wrap icon-big icon-info text-center"><i class="fa fa-bullhorn"></i></h4>
<h4 align="center"> <b class="btn btn-default service_click" id="1" data-toggle="modal" data-target="#ServiceModal1">Assignment</b></h4>
<p style="text-align:center;">Assignment for all..</p></div>

</div>
</div> 

<div class="col-md-4">
<div class="card">
<div class="container-fluid">
<h4 align="center" class="feature-wrap icon-big icon-info text-center"><i class="fa fa-bullhorn"></i></h4>
<h4 align="center"> <b class="btn btn-default service_click" id="1" data-toggle="modal" data-target="#ServiceModal1">Assignment</b></h4>
<p style="text-align:center;">Assignment for all..</p></div>

</div>
</div>  

<div class="col-md-4">
<div class="card">
<div class="container-fluid">
<h4 align="center" class="feature-wrap icon-big icon-info text-center"><i class="fa fa-bullhorn"></i></h4>
<h4 align="center"> <b class="btn btn-default service_click" id="1" data-toggle="modal" data-target="#ServiceModal1">Assignment</b></h4>
<p style="text-align:center;">Assignment for all..</p></div>
</div>
</div> 

<div class="col-md-4">
<div class="card">
<div class="container-fluid">
<h4 align="center" class="feature-wrap icon-big icon-info text-center"><i class="fa fa-bullhorn"></i></h4>
<h4 align="center"> <b class="btn btn-default service_click" id="1" data-toggle="modal" data-target="#ServiceModal1">Assignment</b></h4>
<p style="text-align:center;">Assignment for all..</p></div>

</div>
</div>
</div>
<script>
$(document).ready(function() {
//   $(".index").removeClass("active");
$(".home").addClass("active");
});

</script>
@endsection
