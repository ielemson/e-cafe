@extends('dashboard.master')

@section('content')
<div class="row">
<div class="col-lg-4 col-md-5">
<div class="card card-user">
<div class="image">
<img src="{{asset('img/background.jpg')}}" alt="..."/>
</div>
<div class="content">
<div class="author">
<img class="avatar border-white" src="{{asset('img/faces/face-2.jpg')}}" alt="..."/>
<h4 class="title">{{Auth::user()->name}}<br />
<a href="#"><small>{{'@'}}{{Auth::user()->name}}</small></a>
</h4>
</div>
<p class="description text-center">
"I like the way you work it <br>
No diggity <br>
I wanna bag it up"
</p>
</div>
<hr>
<div class="text-center">
<div class="row">
<div class="col-md-3 col-md-offset-1">
<h5>gender<br /><small>Files</small></h5>
</div>
<div class="col-md-4">
<h5>status<br /><small>Used</small></h5>
</div>
<div class="col-md-3">
<h5>age<br /><small>Spent</small></h5>
</div>
</div>
</div>
</div>
<div class="card">
<div class="header">
<h4 class="title">Team Members</h4>
</div>
<div class="content">
<ul class="list-unstyled team-members">
<li>
<div class="row">
<div class="col-xs-3">
<div class="avatar">
<img src="assets/img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
</div>
</div>
<div class="col-xs-6">
DJ Khaled
<br />
<span class="text-muted"><small>Offline</small></span>
</div>

<div class="col-xs-3 text-right">
<btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
</div>
</div>
</li>
<li>
<div class="row">
<div class="col-xs-3">
<div class="avatar">
<img src="assets/img/faces/face-1.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
</div>
</div>
<div class="col-xs-6">
Creative Tim
<br />
<span class="text-success"><small>Available</small></span>
</div>

<div class="col-xs-3 text-right">
<btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
</div>
</div>
</li>
<li>
<div class="row">
<div class="col-xs-3">
<div class="avatar">
<img src="assets/img/faces/face-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
</div>
</div>
<div class="col-xs-6">
Flume
<br />
<span class="text-danger"><small>Busy</small></span>
</div>

<div class="col-xs-3 text-right">
<btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-8 col-md-7">
<div class="card">
<div class="header">
<h4 class="title">Edit Profile <b class="fa fa-user"></b></h4>
</div>
<div class="content">
<form>
<div class="row">
<div class="col-md-4">
<div class="form-group">
<label>User Level</label>
<input type="text" class="form-control border-input" disabled placeholder="Level" value="{{$user->name}}" disabled>

</div>
</div>
<div class="col-md-4">
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
<label for="InputUsername">Username</label>
<input type="text" class="form-control border-input" placeholder="Username" value="{{Auth::user()->name}}" name="name"    id="name" disabled required>
</div>
@if ($errors->has('name'))
<span class="help-block">
<strong class="text-danger">{{ $errors->first('name') }}</strong>
</span>
@endif
</div>
<div class="col-md-4">
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
<label for="InputEmail">Email address</label>
<input type="email" class="form-control border-input" placeholder="{{Auth::user()->email}}" name="email"  value="{{Auth::user()->email}}"  id="email" disabled required>
</div>
@if ($errors->has('email'))
<span class="help-block">
<strong class="text-danger">{{ $errors->first('email') }}</strong>
</span>
@endif
</div>
</div>

<div class="row">
<div class="col-md-4">
<div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
<label for="InputFirstName">First Name</label>
<input type="text" class="form-control border-input" placeholder="First Name" value="{{Auth::user()->first_name}}" name="first_name"  id="first_name" disabled required>
</div>
@if ($errors->has('first_name'))
<span class="help-block">
<strong class="text-danger">{{ $errors->first('first_name') }}</strong>
</span>
@endif
</div>
<div class="col-md-4">
<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
<label for="InputGender">Gender</label>
<input type="text" class="form-control border-input" value="{{Auth::user()->gender}}" name="gender"  id="gender" disabled required>
</div>
@if ($errors->has('gender'))
<span class="help-block">
<strong class="text-danger">{{ $errors->first('gender') }}</strong>
</span>
@endif
</div>
<div class="col-md-4">
<div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
<label for="InputLastName">Last Name</label>
<input type="text" class="form-control border-input" placeholder="Last Name" value="{{Auth::user()->last_name}}" name="last_name"   id="last_name" disabled required>
</div>
@if ($errors->has('last_name'))
<span class="help-block">
<strong class="text-danger">{{ $errors->first('last_name') }}</strong>
</span>
@endif
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
<label for="InputAddress">Address</label>
<input type="text" class="form-control border-input" placeholder="Home Address" name="address" id="address" value="{{$user->address}}" disabled required>
</div>
@if ($errors->has('address'))
<span class="help-block">
<strong class="text-danger">{{ $errors->first('address') }}</strong>
</span>
@endif
</div>
</div>

<div class="row">
<div class="col-md-4">
<div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
<label for="InputCity">City</label>
<input type="text" class="form-control border-input" placeholder="City" id="city"  name="city" value="{{$user->city}}"  disabled required>
</div>
@if ($errors->has('city'))
<span class="help-block">
<strong class="text-danger" >{{ $errors->first('city') }}</strong>
</span>
@endif
</div>
<div class="col-md-4">
<div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
<label for="InputCountry">Country</label>
<input type="text" class="form-control border-input" placeholder="Country" name="country" id="country" value="{{$user->country}}" disabled required>
</div>

@if ($errors->has('country'))
<span class="help-block">
<strong class="text-danger" >{{ $errors->first('country') }}</strong>
</span>
@endif
</div>

<div class="col-md-4">
<div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
<label for="InputZipCode">Postal Code</label>
<input type="number" class="form-control border-input" placeholder="ZIP Code" id="zip" name="zip" value="{{$user->postal_code}}" disabled required>
</div>
@if ($errors->has('zip'))
<span class="help-block">
<strong class="text-danger" >{{ $errors->first('zip') }}</strong>
</span>
@endif
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="form-group{{ $errors->has('about_me') ? ' has-error' : '' }}">
<label for="InputAboutMe">About Me</label>
<textarea rows="5" class="form-control border-input" placeholder="Here can be your description" name="about_me"  id="about_me" disabled required>{{$user->about_me}}</textarea>
</div>
@if ($errors->has('about_me'))
<span class="help-block">
<strong class="text-danger" >{{ $errors->first('about_me') }}</strong>
</span>
@endif
</div>
</div>
<div class="text-center">
<a href="/user/profile/{{$user->id}}/edit" class="btn btn-warning btn-fill btn-wd">Edit Profile <b class="fa fa-pencil"></b></a>
</div>
<div class="clearfix"></div>
</form>
</div>
</div>
</div>
</div>

<script>
$(document).ready(function() {
//   $(".index").removeClass("active");
$(".profile").addClass("active");
});

</script>
@endsection
