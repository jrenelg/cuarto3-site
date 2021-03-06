@extends('layouts.app')

@section('content')
<section class="main-header">
    <div id="owl-hero" class="owl-carousel owl-theme">
            <div class="item" style="background-image: url(img/sliders/Slide.jpg)">
                <div class="caption">
                    <h6>Branding / Design / Creativty</h6>
                    <h1>We Are <span>Rise</span></h1>
                    <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
                </div>
            </div>
            <div class="item" style="background-image: url(img/sliders/Slide2.jpg)">
                <div class="caption">
                    <h6>Branding / Design / Creativty</h6>
                    <h1>Creative <span>Design</span></h1>
                    <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
                </div>
            </div>
            <div class="item" style="background-image: url(img/sliders/Slide3.jpg)">
                <div class="caption">
                    <h6>Branding / Design / Creativty</h6>
                    <h1>Clean <span>Code</span></h1>
                    <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
                </div>
            </div>
        </div>
</section>        
<!-- Welcome
============================================= -->
<section id="welcome">
    <div class="container">
        <h2>Welcome To <span>CUARTO3</span></h2>
        <hr class="sep">
        <p>Make Yourself At Home Don't Be Shy</p>
        <img class="img-responsive center-block wow fadeInUp" data-wow-delay=".3s" src="img/welcome/logo.png" alt="logo">
    </div>
</section>
@endsection
