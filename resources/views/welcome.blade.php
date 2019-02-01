@extends('layouts.app')
@section('title','Home')
@section('content')

@include('includes.slider')

@include('includes.features')

<script>
$(document).ready(function() {
//   $(".index").removeClass("active"); 
$(".home").addClass("active");
});

</script>
@endsection
