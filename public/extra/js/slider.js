var $slider = $('#home-slider');
$(document).ready(function(){
$slider.slick({
autoplay: true,
autoplaySpeed: 30000,
dots: true,
infinite: true,
fade: true,
arrows: false
});
$("#home-slider-container .slider-controls .slider-prev").on("click",function(){
$slider.slick('slickPrev');
});
$("#home-slider-container .slider-controls .slider-next").on("click",function(){
$slider.slick('slickNext');
});

$slider.find(".slider-content").css({"height":$(window).height(),"eidth":$(window).width()});

});

$(window).resize(function(){
$slider.find(".slider-content").css({"height":$(window).height(),"eidth":$(window).width()});
})