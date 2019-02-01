<header id="header" style="background-color: #191919; border-bottom:2px solid #191919;">
<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-sm-6 col-xs-4">
<div class="top-number">
<p><i class="fa fa-phone-square"></i> 08067407355</p>
</div>
</div>
<div class="col-sm-6 col-xs-8">
<div class="social">
<ul class="social-share">
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
<li><a href="#"><i class="fa fa-skype"></i></a></li>
</ul>
<div class="search">
<form role="form">
<input type="text" class="search-form" autocomplete="off" placeholder="Search">
<i class="fa fa-search"></i>
</form>
</div>
</div>
</div>
</div>
</div>
<!--/.container-->
</div>
<!--/.top-bar-->

<nav class="navbar navbar-inverse" role="banner">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand img-fluid" href="{{route('index')}}"><img src="{{asset('img/logo/logo.png') }}" alt="logo" style="margin-top:-15px; width:70%"></a>
</div>

<div class="collapse navbar-collapse navbar-right">
<ul class="nav navbar-nav">
<li class="home"><a href="{{route('index')}}">Home 
<!--<b class="fa fa-home"></b>-->
</a></li>
<li class="about"><a href="about-us.html">About Us 
<!--<b class="fa fa-globe"></b>-->
</a></li>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services 
<!--<b class="fa fa-gear"></b>-->
</a>
<ul class="dropdown-menu">
<li><a href="blog-item.html">Blog Single</a></li>
<li><a href="pricing.html">Pricing</a></li>
<li><a href="404.html">404</a></li>
<li><a href="shortcodes.html">Shortcodes</a></li>
</ul>
</li>
<!-- Authentication Links -->
@guest
<li class="login"><a href="{{ route('user_login') }}">Login 
<!--<b class="fa fa-sign-in"></b>-->
</a></li>
<li class="register"><a href="{{ route('reg_user') }}">Register
<!-- <b class="fa fa-pencil"></b>-->
</a></li>

@else
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
{{ Auth::user()->name }} <b class="fa fa-user"></b><span class="caret"></span>
</a>

<ul class="dropdown-menu">
<li style="border-bottom:2px solid red;"> <a href="{{route('user.index')}}"><b>Dashboard</b> <b class="fa fa-user"></b> </a></li>

<li style="border-bottom:2px solid red;">
<a href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
<b>Logout</b> <b class="fa fa-sign-out"></b>
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}
</form>
</li>

</ul>
</li>
@endguest
</ul>
</div>
</div>
<!--/.container-->
</nav>
<!--/nav-->

</header>
<!--/header-->
