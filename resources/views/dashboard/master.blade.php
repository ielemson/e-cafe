<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>
@if(empty($title))
E-cafe
@else
E-cafe - {{$title}}
@endif
</title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />


<!-- Bootstrap core CSS     -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('extra/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('sweetalert/sweetalert.css') }}" rel="stylesheet">
<link href="{{ asset('facebook/facebook.css') }}" rel="stylesheet">
<link href="{{ asset('css/alert.css') }}" rel="stylesheet">
<!-- Animation library for notifications   -->
<link href="{{ asset('extra/style/animate.min.css') }}" rel="stylesheet">

<!--  Paper Dashboard core CSS    -->
<link href="{{ asset('extra/style/paper-dashboard.css') }}" rel="stylesheet">

<!--  Fonts and icons     -->
<link href="{{ asset('extra/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<link href="{{ asset('extra/style/themify-icons.css') }}" rel="stylesheet">


<!--   Core JS Files   -->
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('extra/js/demo.js') }}"></script>
<script src="{{ asset('extra/progressbar/progressbar.min.js') }}"></script>


<!--  Notifications Plugin    -->

<script src="{{ asset('extra/js/bootstrap-notify.js') }}"></script>
<!--<script src="{{ asset('extra/js/chartist.min.js') }}"></script>-->


<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{ asset('extra/js/paper-dashboard.js') }}"></script>

<!-- datepicker.js -->
<script src="{{ asset('extra/js/datepicker.js') }}"></script>
</head>
<body>

<div class="wrapper">
<div class="sidebar" data-background-color="white" data-active-color="danger">

<!--
Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
-->

<div class="sidebar-wrapper">
@include('dashboard.includes.sidebar')
</div>
</div>

<div class="main-panel">
@include('dashboard.includes.navbar')

@include('modals.activate_wallet')
<div class="content">
<div class="row">
<div class="col-md-12">
@include('info-box.errors')
@include('info-box.success')
</div>
</div>
<div class="container-fluid">
@yield('content')
</div>
</div>


<footer class="footer">
@include('dashboard.includes.footer')
</footer>

</div>
</div>


</body>
<script type="text/javascript">
$(document).ready(function(){
$('#datepicker1').datepicker();
//
//demo.initChartist();
//
//$.notify({
//icon: 'ti-gift',
//message: "Welcome to <b>Your Dashboard</b> - {{ Auth::user()->name }}"
//
//},{
//type: 'success',
//timer: 4000
//});
//
$.ajaxSetup({
headers:{
'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
}
});

$(".wallet_update").submit(function(e){
e.preventDefault();
var user_id = "{{{auth::user()->id}}}";
//var bankname = $("#bankname").val();
//var userID = $("#userID").val();
//var accnumb = $("#accnumb").val();

//var wallet_data = 'bankname='+ bankname + '&userID='+ userID + '&accnumb='+ accnumb;

$.ajax({
method:"POST",
data: {
"bankname": $('input[name=bankname]').val(),
"userID": $('input[name=userID]').val(),
"accnumb": $('input[name=accnumb]').val(),
"accname": $('input[name=accname]').val()
},
url: "/wallet/update/"+user_id,
success: function(data)
{
var bankname = $("#bankname").val("");
var userID = $("#userID").val("");
var accnumb = $("#accnumb").val("");
$("#activModal").modal("hide");
location.reload();
$("#")
},
error: function(data)
{
console.log(data.responseJSON);									
}
});

});

});
$("#fund_wallet").on("change" , function(){
var funds = $(this).val();
if(funds != ""){

$.ajax({
method:"POST",
data:funds,
url: "/wallet/view_plans/"+funds,
success: function(data)
{  
swal({
title: "Your Selected plan",
text:"<div class='table-responsive'><table class='table table-hover'><tbody><tr><td>Plan</td><td>TNC"+data.tcn_equivalent+"</td></tr>  <tr><td>Price</td><td>&#8358;"+data.services_plan+"</td></tr><tr><td>Bank</td><td>GTB</td></tr><tr><td>Acc Name</td><td>Tripple N Enterprise</td></tr><tr><td>Acc Number</td><td>0122922929</td></tr><tr><td>E-Purchase</td><td><a href='' target='_blank'class='btn btn-primary btn-xs'>Fund Account</a></td></tr><tr><td>Print</td><td><a href='' target='_blank'><b class='fa fa-print fa-lg'></b></a></td></tr></tbody></table></div>",
type: "info",
showCancelButton: true,
confirmButtonColor: "#DD6B55",
confirmButtonText: "Yes, purchase!",
cancelButtonText: "No, cancel purchase!",
closeOnConfirm: false,
closeOnCancel: false,
html: true
},
function(isConfirm){
if (isConfirm) {
location.href="/wallet/fund/"+data.plan_id;
} else {
swal("Cancelled", "Please select other suitable plan to proceed", "error");
$("#fund_wallet").val("");
}
}); 
},
error:function(data){
console.log(data);  
}
});
}

$("#viewModal").on('hidden.bs.modal' , function(){
$("#fund_wallet").val("");

});
});

//PROGRESS BAR FOR USER
var bar = new ProgressBar.Line(container, {
strokeWidth: 3,
easing: 'easeInOut',
duration: 1400,
color: '#80D651',
trailColor: '#eee',
trailWidth: 10,
svgStyle: {width: '100%', height: '100%'},
text: {
style: {
// Text color.
// Default: same as stroke color (options.color)
color: '#000000',
position: 'absolute',
right: '0',
top: '20px',
padding: 0,
margin: 0,
transform: null
},
autoStyleContainer: true
},
from: {color: '#FFEA82'},
to: {color: '#ED6A5A'},
step: (state, bar) => {
bar.setText(Math.round(bar.value() * 100) + ' %');
}
});

bar.animate({{auth::user()->user_progress_level}});  // Number from 0.0 to 1.0
//PROGRESS BAR FOR USER
</script>
</html>