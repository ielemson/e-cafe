<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar bar1"></span>
<span class="icon-bar bar2"></span>
<span class="icon-bar bar3"></span>
</button>
<a class="navbar-brand" href="{{route('user.index')}}">Dashboard</a>
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<li>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="ti-panel"></i>
<p>contact support</p>
</a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
@if(count($notifys)> 0)
<i class="ti-bell" style="color:green;"></i>
@else
<i class="ti-bell"></i>
<p class="notification">You have {{$count_msg}} notification</p>
@endif
<p class="notification">{{$count_msg}}</p>
<p>notifications</p>
<b class="caret"></b>
</a>
<ul class="dropdown-menu">
@foreach($notifys as $msg)
<li><a href="/user/notification/{{$msg->id}}"> <b>{{$msg->notification_type}}</b></a></li>
@endforeach
</ul>
</li>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="ti-user"></i>
<p>{{ Auth::user()->name }}</p>
<b class="caret"></b>
</a>
<ul class="dropdown-menu">
<li><a href="{{route('index')}}"><i class="ti-home"></i> <b>Home</b></a></li>
<li><a href="/user/profile/{{auth::user()->id}}"><i class="ti-user"></i> <b>Profile</b></a></li>
<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
<i class="ti-export"></i> <b>Logout</b> 
</a> <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}
</form></li>
</ul>
</li>

<!--
<li>
<a href="#">
<i class="ti-settings"></i>
<p>{{ Auth::user()->name }}</p>
</a>
</li>
-->
</ul>

</div>
</div>
</nav>