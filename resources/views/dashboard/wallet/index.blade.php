@extends('dashboard.master')
@section('content')
@include('modals.investment')
@if(auth::user()->wallet->active_status == 0)
<div class="row col-sm-12 col-md-12 displaystyle-leftborder displaystyle-rightborder displaystyle-danger displaystyle-sm">
<b class="fa fa-credit-card"></b>&nbsp; Please activate your <a href="#" style="color:#000000; border-bottom:1px dotted red; font-weight:bolder;"  data-toggle="modal" data-target="#activModal"><b>WALLET</b> </a>information to enable you fund your account</div>
@endif
@if(auth::user()->wallet->confirm_status == 2)
<div class="row col-sm-12 col-md-12 displaystyle-leftborder displaystyle-rightborder displaystyle-info displaystyle-sm">
<b class="fa fa-credit-card"></b>&nbsp;Please ensure to fund your <a href="#" style="color:#000000;  border-bottom:1px dotted red; font-weight:bolder;"><b data-toggle="modal" data-target="#viewModal">WALLET</b> </a>with <b style="color:#000000;">TCN</b> to enable you use our services</div>
@endif
<div class="row">
<!--WALLET DETAILS-->
<div class="col-lg-6">
<div class="card">
<div class="content">
<dl class="dl-horizontal">
<dt>Available balance</dt>
<dd><b class="fa fa-money"></b><b class="text-success">TNC{{auth::user()->wallet->wallet_amount}}.00</b></dd>
</dl>
<div class="footer">
<hr />
<div class="stats">
<button class="btn btn-default btn-xs" data-toggle="modal" data-target="#purchaseModal" style="border:none; color:#3091B2;" <?php  //echo $disabled_btn;?> ><i class="ti-shopping-cart"></i>&nbsp;<b>Purchase TCN</b></button>
</div>
</div>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="card">
<div class="content">
<dl class="dl-horizontal">
<dt>Purchase Status</dt>

<dd><b class="badge" style="background-color:green; color:#ffffff"><i class="fa fa-check-square-o fa-xs"></i><b>No pending order</b></b></dd>
</dl>
<div class="footer">
<hr />
<div class="stats">
<button class="btn btn-default btn-xs" data-toggle="modal" data-target="#viewstatus" style="border:none;color:#3091B2;"  ><b>

<?php //echo $glow;?>
&nbsp;View Purchase status</b></button>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-md-6">
<div class="card">
<div class="header">
<h4 class="title">Email Statistics</h4>
<p class="category">Last Campaign Performance</p>
</div>
<div class="content">
<div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

<div class="footer">
<div class="chart-legend">
<i class="fa fa-circle text-info"></i> Open
<i class="fa fa-circle text-danger"></i> Bounce
<i class="fa fa-circle text-warning"></i> Unsubscribe
</div>
<hr>
<div class="stats">
<i class="ti-timer"></i> Campaign sent 2 days ago
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="card ">
<div class="header">
<h4 class="title">2015 Sales</h4>
<p class="category">All products including Taxes</p>
</div>
<div class="content">
<div id="chartActivity" class="ct-chart"></div>

<div class="footer">
<div class="chart-legend">
<i class="fa fa-circle text-info"></i> Tesla Model S
<i class="fa fa-circle text-warning"></i> BMW 5 Series
</div>
<hr>
<div class="stats">
<i class="ti-check"></i> Data information certified
</div>
</div>
</div>
</div>
</div>
</div>

<script>
$(document).ready(function() {
//   $(".index").removeClass("active");
$(".wallet").addClass("active");
});

</script>
@endsection


