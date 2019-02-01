
@extends('dashboard.master')


@section('content')
@if(count($notify)>0)
<div class="container-fluid"><div class="row">
@foreach($notify as $msgs)
<div class="col-md-12">
<div class="card">
<div class="header">
<h4 class="title">{{$msgs->notification_type}}</h4>
<p class="category">24 Hours performance</p>
</div>
<div class="content">

{!!$msgs->notification!!}

<hr>
<div class="footer">
<div class="chart-legend">
<i class="fa fa-circle text-info"></i> <a href="">home</a>
<i class="fa fa-circle text-danger"></i> <a href="">wallet</a>
<i class="fa fa-circle text-warning"></i> <a href="">profile</a>
</div>
<hr>
<div class="stats">
<i class="ti-reload"></i> {{$msgs->created_at->diffForHumans()}}
</div>
</div>
</div>
</div>
</div>
@endforeach
</div>

</div>
@endif
<script>
$(document).ready(function() {
//   $(".index").removeClass("active"); 
$(".notification").addClass("active");
});

</script>
@endsection