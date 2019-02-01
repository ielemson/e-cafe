<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- CSRF Token -->

<!--<script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>-->
<script>
// Initialize Firebase
//var config = {
//apiKey: "AIzaSyBh9EFN9JfYnqarE1rw1XCO_Ho9V-OsFZY",
//authDomain: "my-fist-project-47595.firebaseapp.com",
//databaseURL: "https://my-fist-project-47595.firebaseio.com",
//projectId: "my-fist-project-47595",
//storageBucket: "my-fist-project-47595.appspot.com",
//messagingSenderId: "582402691150"
//};
//firebase.initializeApp(config);
</script>

<title>
@if(empty($title))
E-cafe
@else
E-cafe - {{$title}}
@endif
</title>
<!--custom  Styles Open-->
<!--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
<!--<link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css'>-->
<link rel='stylesheet' href="{{asset('extra/style/slick.css')}}">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<!-- custom styles close-->
<link href="{{ asset('sweetalert/sweetalert.css') }}" rel="stylesheet">
<link href="{{ asset('facebook/facebook.css') }}" rel="stylesheet">

<!-- Bootstrap styles -->
<link href="{{ asset('extra/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('extra/style/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('extra/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<!--<link href="{{ asset('extra/style/reset.min.css') }}" rel="stylesheet">-->
<link href="{{ asset('extra/style/reg-form.css') }}" rel="stylesheet">
<link href="{{ asset('extra/style/alert.css') }}" rel="stylesheet">
<!-- Bootstrap styles -->

<!--script-->
<!--<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>-->
<script src="{{ asset('js/app.js') }}"></script>
<!--<script src="{{ asset('extra/bootstrap/js/bootstrap.min.js') }}"></script>-->
<script src="{{ asset('sweetalert/sweetalert.min.js') }}"></script>
<!--script-->
</head>
<body class="homepage">
@include('includes.header')

@yield('content')

@include('includes.footer')

<!-- Scripts -->
<!--LOCAL INCLUDES-->
<!--<script src="{{ asset('js/app.js')}}"></script>-->
<script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('extra/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('extra/js/reg_form.js') }}"></script>
<script src="{{ asset('extra/js/pass-strenght.js') }}"></script>
<script src="{{ asset('extra/js/zxcvbn.js') }}"></script>
<script src="{{asset('extra/js/slick.min.js')}}"></script>
<!--LOCAL INCLUDES-->


<!--CDN'S-->
<!--<script src='https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js'></script>-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js" type="text/javascript"></script>-->
<script src="{{asset('extra/js/slider.js')}}"></script>

<!--CDN'S-->

<!-- Scripts -->
<script>
$(document).ready(function(e){

//CSRF TOKEN
$.ajaxSetup({
headers:{
'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
}
});

$("#refresh").on("click",function(e){
$.ajax({
type:'GET',
url:"/refreshcaptcha",
success:function(data){
//console.log(data.captcha)
$(".captcha span").html(data.captcha);
}
});
});
});
</script>
</body>
</html>