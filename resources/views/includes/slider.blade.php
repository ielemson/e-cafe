<style>
.container {
margin: 0px auto;
width: 100%;
}

@keyframes zoom {
from {
-moz-transform: scale(1);
transform: scale(1);
-webkit-transform: scale(1);
-ms-transform: scale(1);
-ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=1.0, M12=0, M21=0, M22=1.0, SizingMethod='auto expand')";
filter: progid:DXImageTransform.Microsoft.Matrix(M11=1.0, M12=0, M21=0, M22=1.0, SizingMethod='auto expand');
}
to {
-moz-transform: scale(1.5);
transform: scale(1.5);
-webkit-transform: scale(1.5);
-ms-transform: scale(1.5);
-ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=1.5, M12=0, M21=0, M22=1.5, SizingMethod='auto expand')";
filter: progid:DXImageTransform.Microsoft.Matrix(M11=1.5, M12=0, M21=0, M22=1.5, SizingMethod='auto expand');
}
}
#home-slider-container {
position: relative;
width: 100%;
height: 100%;
}
#home-slider-container .container {
height: 100%;
}
#home-slider-container .container .slider-controls {
position: relative;
height: 100%;
}
#home-slider-container .container .slider-controls .slider-next, #home-slider-container .container .slider-controls .slider-prev {
position: absolute;
margin-top: -20px;
top: 50%;
z-index: 9999;
width: 40px;
height: 40px;
-moz-transform: rotate(45deg);
transform: rotate(45deg);
-webkit-transform: rotate(45deg);
-ms-transform: rotate(45deg);
opacity: 0.5;
text-decoration: none;
}
#home-slider-container .container .slider-controls .slider-next:focus, #home-slider-container .container .slider-controls .slider-prev:focus {
outline: none;
}
#home-slider-container .container .slider-controls .slider-next:hover, #home-slider-container .container .slider-controls .slider-prev:hover {
opacity: 1;
}
#home-slider-container .container .slider-controls .slider-next i, #home-slider-container .container .slider-controls .slider-prev i {
font-size: 100px;
color: #000;
}
#home-slider-container .container .slider-controls .slider-prev {
border-left: 2px solid #fff;
border-bottom: 2px solid #fff;
margin-left: 20px;
left: 0;
}
#home-slider-container .container .slider-controls .slider-next {
border-right: 2px solid #fff;
border-top: 2px solid #fff;
margin-right: 20px;
right: 0;
}
#home-slider-container #home-slider {
height: 100%;
width: 100%;
position: relative;
}
#home-slider-container #home-slider .slick-dots {
position: absolute;
bottom: 10px;
left: 0;
width: 100%;
text-align: center;
}
#home-slider-container #home-slider .slick-dots li {
display: inline-block;
text-align: center;
position: relative;
width: 12px;
height: 12px;
margin: 0px 5px;
}
#home-slider-container #home-slider .slick-dots li.slick-active:after, #home-slider-container #home-slider .slick-dots li:hover:after {
background-color: #fff;
}
#home-slider-container #home-slider .slick-dots li button {
display: none;
}
#home-slider-container #home-slider .slick-dots li:after {
content: "";
position: absolute;
left: 0;
bottom: 0;
width: 100%;
height: 100%;
border: 1px solid #fff;
border-radius: 50%;
display: block;
cursor: pointer;
transition: background-color 0.4s ease;
-webkit-transition: background-color 0.4s ease;
-moz-transition: background-color 0.4s ease;
-o-transition: background-color 0.4s ease;
-ms-transition: background-color 0.4s ease;
}
#home-slider-container #home-slider .slider-item {
position: relative;
width: 100%;
height: 100%;
}
#home-slider-container #home-slider .slider-item img {
position: absolute;
left: 0;
top: 0;
width: 100%;
min-width: 100%;
height: 100%;
min-height: 100%;
-webkit-transform-origin: center center;
-ms-transform-origin: center center;
-moz-transform-origin: center center;
transform-origin: center center;
-webkit-animation: zoom 15s ease-in-out infinite alternate;
-moz-animation: zoom 15s ease-in-out infinite alternate;
-o-animation: zoom 15s ease-in-out infinite alternate;
-ms-animation: zoom 15s ease-in-out infinite alternate;
animation: zoom 15s ease-in-out infinite alternate;
}

</style>


<div id="home-slider-container">
<div id="home-slider">
<div class="slider-item"><img src="{{asset('img/slider/slide-1.jpg')}}"/>
<div class="slider-content">
<div class="container">
<div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>
</div>
</div>
</div>
<div class="slider-item"><img src="{{asset('img/slider/slide-2.jpg')}}"/>
<div class="slider-content">
<div class="container">
<div class="slider-controls"><a class="slider-prev" href="#onceki"> </a><a class="slider-next" href="#sonraki"></a></div>
</div>
</div>
</div>
</div>
</div>


