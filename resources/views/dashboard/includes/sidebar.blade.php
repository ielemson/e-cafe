<div class="logo">
<a href="" class="simple-text">
{{ Auth::user()->email }}
</a>
</div>

<ul class="nav">
<li class="home">
<a href="{{route('user.index')}}">
<i class="ti-panel"></i>
<p>Dashboard</p>
</a>
</li>
<li class="profile">
<a href="/user/profile/{{auth::user()->id}}">
<i class="ti-user"></i>
<p>User Profile</p>
</a>
</li>
<li class="wallet">
<a href="/user/wallet/{{auth::user()->id}}">
<i class="ti-wallet"></i>
@if(auth::user()->wallet->active_status == 0)
<p class="text-danger">Activate Wallet</p>
@else
<p>Wallet</p>
@endif
</a>
</li>
<li class="message">
<a href="">
<i class="ti-email"></i>
<p>Message</p>
</a>
</li>
<!--
<li>
<a href="icons.html">
<i class="ti-pencil-alt2"></i>
<p>Team</p>
</a>
</li>
-->
<!--
<li>
<a href="maps.html">
<i class="ti-map"></i>
<p>Maps</p>
</a>
</li>
-->

<li class="notification">
<a href="">
<i class="ti-bell"></i>
<p>Notifications</p>
</a>
</li>

<li class="">
<a href="">
<i class="ti-ruler"></i>
<p>Your Progress</p>
<div id="container" class="col-md-12"></div>
</a>
</li>
<br/>
<li class="notification">
<a href="">
<!--<i class="ti-bell"></i>-->
<!--<p>Notifications</p>-->
</a>
</li>


<li class="progress">
<a href="">
<!--<i class="ti-bell"></i>-->

</a>
</li>


<li style="border-bottom:2px solid red;"  class="active-pro">
<a href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
<b>Logout</b> <i class="ti-export"></i>
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}
</form>
</li>

<!--
<li class="active-pro">
<a href="{{route('logout')}}">
<i class="ti-export"></i>
<p>Logout</p>
</a>
</li>
-->
</ul>
