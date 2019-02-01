@extends('dashboard.master')

@section('content')
<style>

.file {
display: none ! important;
}
</style>
<div class="col-md-8 col-md-offset-2 col-xs-12 col-lg-8 col-sm-12">
<div id="info_div" class="Display_info"></div>
<form method="post" action="" enctype="multipart/form-data">

<div class="form-group input-group">
<span class="input-group-addon"><i class="fa fa-bank"></i>
</span>
<input type="text" class="form-control" name="bnk_name" placeholder="Bank Name"  required>
<input type="hidden" class="form-control" name="userID" >
</div>

<div class="form-group input-group">
<span class="input-group-addon"><i class="fa fa-user"></i>
</span>
<input type="text" class="form-control" name="acc_name" placeholder="Account Name"  required>
</div>

<div class="form-group input-group">
<span class="input-group-addon"><i class="fa fa-user"></i>
</span>
<input type="tel" class="form-control" name="acc_no" placeholder="Account Number"  required>
</div>

<div class="form-group input-group">
<span class="input-group-addon"><i class="fa fa-calendar-o"></i>
</span>
<input type="text" class="form-control" id="datepicker1" name="date_paid" placeholder="Date Payment Was Made" required>
</div>

<!--
<div class="form-group">

<div class="input-group date icon-addon addon-md">
<input type="text" class="form-control" id="datepicker" name="dob" placeholder="date of birth">
<label for="date" class="glyphicon glyphicon-calendar" rel="tooltip" title="date"></label>
</div></div>
-->

<div class="form-group input-group">
<span class="input-group-addon"><i class="fa fa-money"></i><b>TNC</b>
</span>
<select class="form-control" id="fund_wallet" name="plan_paid" required>
<option value=""><b class="fa fa-money"></b>&#8358; {{$fund_wallet->naira_value}}- TCN{{$fund_wallet->tcn_equivalent}}</option>
</select>
</div>

<div class="form-group">
<input type="file" name="payment_img" class="file" required>
<div class="input-group">
<span class="input-group-btn">
<button class="browse btn btn-primary input-sm" type="button"><i class="fa fa-paperclip"></i><b>upload</b></button>
</span>
<input type="text" class="form-control input-sm" disabled placeholder="payment proof">
<span class="input-group-addon"><i class="fa fa-picture-o fa-sm"></i></span>
</div>
</div>
<div class="form-group input-group">
<span class="input-group-addon"><i class="fa  fa-pencil "></i>
</span>
<!--                                            <input type="text" class="form-control" placeholder="Font Awesome Icon">-->
<textarea placeholder="comments.." name="other_comments" class="form-control"></textarea>
</div>
<button type="submit" class="btn btn-primary btn-block" name="send_detail">Send&nbsp;<b class="fa fa-send"></b></button>
</form>
</div>


@endsection