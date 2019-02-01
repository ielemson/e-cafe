@extends('layouts.app')
@section('content')

<div class="container" style="margin-bottom:20px;">

<div class="row">
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
<form class="form-vertical" method="POST" action="{{ route('login') }}">
{{ csrf_field() }}
<h2>Please Login </h2>
<hr class="colorgraph">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


<div class="col-md-12">
<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
<br/>
@if ($errors->has('email'))
<span class="help-block">
<div class="row col-sm-6 displaystyle-leftborder displaystyle-rightborder displaystyle-danger displaystyle-sm">
<strong>{{ $errors->first('email') }}</strong>
</div>

</span>
@endif
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

<div class="col-md-12">
<input id="password" type="password" class="form-control" name="password"  placeholder="Password" required>

@if ($errors->has('password'))
<span class="help-block">
<div class="row col-sm-6 displaystyle-leftborder displaystyle-rightborder displaystyle-danger displaystyle-sm">
<strong>{{ $errors->first('password') }}</strong>
</div>
</span>
@endif
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-xs-6 col-sm-7 col-md-7">
<div class="form-group">

<div class="checkbox">
<label>
<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
</label>

</div>
</div>
</div>

<div class="col-xs-5 col-sm-5 col-md-5" >
<div class="form-group">

<div class="checkbox">
<a href="{{ route('reset_password') }}">Forgot Password</a>

</div>
</div>
</div>

</div>

<hr class="colorgraph">
<div class="row">
<div class="col-xs-12 col-md-6"><button type="submit"  class="btn btn-primary btn-block btn-md" tabindex="7">Login <b class="fa fa-sign-in"></b></button></div>
<div class="col-xs-12 col-md-6" style=" margin-top:10px;"><a href="{{ route('reg_user') }}" class="btn btn-info btn-block btn-md">Register <b class="fa fa-location-arrow "></b></a></div>
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
$(".login").addClass("active");
});

</script>
@endsection