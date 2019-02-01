@extends('layouts.app')
@section('content')
<div class="container" style="margin-bottom:20px;">
<div class="row">
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-4 col-md-offset-3">
<form class="form-horizontal"  id="register_user" method="POST" action="{{ route('register') }}">
{{ csrf_field() }}
<!--<h2>Please Sign Up </h2>-->

<div id="msform">
<!--progress bar-->
<div class="row">
<ul id="progressbar">
<li class="active">Account Setup</li>
<li>Social Profiles</li>
<li>Personal Details</li>
</ul>
</div>
<hr class="colorgraph">

<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
<fieldset>
<h2 class="fs-title">Create your account</h2>
<h3 class="fs-subtitle">Fill out all fields</h3>

<!--first name *******************-->
<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }} input-group">
<span class="input-group-addon"><i class="fa fa-user"></i>
</span>
<input type="text"  name="first_name" id="first_name" class="form-control input-md text_field" placeholder="First Name" tabindex="1" value="{{ old('first_name') }}">
</div>
@if ($errors->has('first_name'))
<span class="help-block">
<div class="row col-sm-6 displaystyle-leftborder displaystyle-rightborder displaystyle-danger displaystyle-sm">
<strong>{{ $errors->first('first_name') }}</strong>
</div>
</span>
@endif
<!--first name *******************-->



<!--Last Name ******************-->
<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }} input-group">
<span class="input-group-addon"><i class="fa fa-user"></i>
</span>
<input type="text"  name="last_name" id="last_name" class="form-control input-md text_field" placeholder="Last Name" tabindex="2" value="{{ old('last_name') }}" >
</div>
@if ($errors->has('last_name'))
<span class="help-block">
<div class="row col-sm-6 displaystyle-leftborder displaystyle-rightborder displaystyle-danger displaystyle-sm">
<strong>{{ $errors->first('last_name') }}</strong>
</div>
</span>
@endif
<!--Last Name ******************-->
<input type="button" name="next" class="next action-button" value="Next" />
</fieldset>

<fieldset>
<h2 class="fs-title">Social Profiles</h2>
<h3 class="fs-subtitle">Your presence on the social network</h3>

<!--second form ************************************-->

<!--User Name*************************-->
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} input-group">
<span class="input-group-addon"><i class="fa fa-user"></i>
</span>
<input type="text"  name="name" id="name" class="form-control input-md text_field" placeholder="Display Name" tabindex="3" value="{{ old('name') }}">
</div>
@if ($errors->has('name'))
<span class="help-block">
<div class="row col-sm-6 displaystyle-leftborder displaystyle-rightborder displaystyle-danger displaystyle-sm">
<strong>{{ $errors->first('name') }}</strong>
</div>
</span>
@endif
<!--User Name*************************-->

<!---->
<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }} input-group">
<span class="input-group-addon"><i class="fa fa-user"></i>
</span>
<select class="form-control" name="gender">
<option value=""> Gender</option>
<option value="male"> male</option>
<option value="female">female</option>
</select>
</div>
@if ($errors->has('gender'))
<span class="help-block">
<div class="row col-sm-6 displaystyle-leftborder displaystyle-rightborder displaystyle-danger displaystyle-sm">
<strong class="text-danger">{{ $errors->first('gender') }}</strong>
</div>
</span>
@endif

<!--second form ************************************-->
<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="button" name="next" class="next action-button" value="Next" />
</fieldset>

<fieldset>
<h2 class="fs-title">Personal Detail</h2>
<h3 class="fs-subtitle">We will never sell it</h3>
<!--third form**********************************************-->

<!--Email**********************************************-->
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} input-group">
<span class="input-group-addon"><i class="fa fa-envelope"></i>
</span>
<input type="text"  name="email" id="last_name" class="form-control input-md text_field" placeholder="Email Address" tabindex="4"tabindex="4" value="{{ old('email') }}"  required>
</div>
@if ($errors->has('email'))
<span class="help-block">
<div class="row col-sm-6 displaystyle-leftborder displaystyle-rightborder displaystyle-danger displaystyle-sm">
<strong>{{ $errors->first('email') }}</strong>
</div>
</span>
@endif
<!--Email**********************************************-->
<!---->
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} input-group">
<span class="input-group-addon"><i class="fa fa-key"></i>
</span>
<input type="password"  name="password" id="password" class="form-control input-md text_field" placeholder="Password" tabindex="4"tabindex="5" value="{{ old('password') }}"  required>
@if ($errors->has('password'))
<span class="help-block">
<div class="row col-sm-6 displaystyle-leftborder displaystyle-rightborder displaystyle-danger displaystyle-sm">
<strong>{{ $errors->first('password') }}</strong>
</div>
</span>
@endif
</div>
<!---->
<div class="form-group input-group">
<span class="input-group-addon"><i class="fa fa-key"></i>
</span>
<input id="password-confirm" type="password" class="form-control input-md text_field" name="password_confirmation" placeholder="Confirm Password" required>
</div>
<!--third form**********************************************-->
<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="submit" name="submit" class="submit action-button" value="Submit" />
</fieldset>
</div>
</div>


<!--<hr class="colorgraph">-->
<!--
<div class="row">
<div class="col-xs-12 col-md-6"><button type="submit"  class="btn btn-primary btn-block btn-md" tabindex="7">Register <b class="fa fa-send"></b></button></div>
<div class="col-xs-12 col-md-6" style=" margin-top:10px;"><a href="{{ route('user_login') }}" class="btn btn-success btn-block btn-md">Sign In <b class="fa fa-sign-in"></b></a></div>
</div>
-->
</div>
</form>
</div>
</div>
</div>

<style>
/* Credit to bootsnipp.com for the css for the color graph */
.colorgraph {
height: 5px;
border-top: 0;
background: #c4e17f;
border-radius: 5px;
background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>
<script>
$(document).ready(function() {
//   $(".index").removeClass("active"); 
$(".register").addClass("active");
});
</script>
@endsection
