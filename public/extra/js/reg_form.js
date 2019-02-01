//jQuery time
(function($) {
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
var count=0; // to count blank fields

/*------------validation function-----------------*/
//$('#register_user').on('submit' , function(e) {

//fetching all inputs with same class name text_field and an html tag textarea 
//var input_field = $('.text_field');
//var text_area = $('textarea');

//for loop to count blank inputs 
//for(var i=input_field.length;i>count;i--){
//if(input_field[i-1].value=='')
//{
//count = count + 1;
//
//}
//else{			
//count = 0;
//}
//}

//Notifying validation 
//if(count!=0){

//alert("*All Fields are mandatory*");
//sweetAlert("Oops...", "*All Fields are mandatory*", "error");
//swal({
//title: "Error <small>Oops</small>!",
//text: "<span style='color:#d9534f; font-weight:bold;'><span> *ALL FIELDS ARE MANDATORY*",
//type:"error",
//html: true
//});
//event.preventDefault();	
//}
//else{			
//return true;
//}

//});
$(".next").click(function() {
if (animating) return false;
animating = true;

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//activate next step on progressbar using the index of next_fs
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({
opacity: 0
}, {
step: function(now, mx) {
//as the opacity of current_fs reduces to 0 - stored in "now"
//1. scale current_fs down to 80%
scale = 1 - (1 - now) * 0.2;
//2. bring next_fs from the right(50%)
left = (now * 50) + "%";
//3. increase opacity of next_fs to 1 as it moves in
opacity = 1 - now;
current_fs.css({
'transform': 'scale(' + scale + ')'
});
next_fs.css({
'left': left,
'opacity': opacity
});
},
duration: 800,
complete: function() {
current_fs.hide();
animating = false;
},
//this comes from the custom easing plugin
easing: 'easeInOutBack'
});
});

$(".previous").click(function() {
if (animating) return false;
animating = true;

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//de-activate current step on progressbar
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();
//hide the current fieldset with style
current_fs.animate({
opacity: 0
}, {
step: function(now, mx) {
//as the opacity of current_fs reduces to 0 - stored in "now"
//1. scale previous_fs from 80% to 100%
scale = 0.8 + (1 - now) * 0.2;
//2. take current_fs to the right(50%) - from 0%
left = ((1 - now) * 50) + "%";
//3. increase opacity of previous_fs to 1 as it moves in
opacity = 1 - now;
current_fs.css({
'left': left
});
previous_fs.css({
'transform': 'scale(' + scale + ')',
'opacity': opacity
});
},
duration: 800,
complete: function() {
current_fs.hide();
animating = false;
},
//this comes from the custom easing plugin
easing: 'easeInOutBack'
});
});

})(jQuery);