@extends('layouts.app')

@section('content')

<!-- Some Fune Facts
============================================= -->
<section id="fun-facts">
    <div class="container">
        <h2>Some Fun Facts </h2>
        <hr class="light-sep">
        <p>Fun Facts</p>
        <div class="row wow fadeInUp" data-wow-delay=".3s">
            <div class="col-lg-3">
                <span class="icon-happy"></span>
                <h2 class="number timer">367</h2>
                <h4>Happy Clients</h4>
            </div>
            <div class="col-lg-3">
                <span class="icon-trophy"></span>
                <h2 class="number timer">150</h2>
                <h4>Project Done</h4>
            </div>
            <div class="col-lg-3">
                <span class="icon-wine"></span>
                <h2 class="number timer">121</h2>
                <h4>Glass Of Wine</h4>
            </div>
            <div class="col-lg-3">
                <span class="icon-documents"></span>
                <h2 class="number timer">10000</h2>
                <h4>Lines Of Code</h4>
            </div>
        </div>
    </div>
</section>
<!-- Some Fune Facts
============================================= -->
<section id="team">
    <div class="container">
        <h2>Our Team</h2>
        <hr class="sep">
        <p>Designers Behind This Work</p>
        <div class="row wow fadeInUp" data-wow-delay=".3s">
            <div class="col-md-4">
                <div class="team">
                    <img class="img-responsive center-block" src="img/team/MariaDoe.jpg" alt="1">
                    <h4>Maria Doe</h4>
                    <p>Designer</p>
                    <div class="team-social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team">
                    <img class="img-responsive center-block" src="img/team/JasonDoe.jpg" alt="2">
                    <h4>Jason Doe</h4>
                    <p>Developer</p>
                    <div class="team-social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team">
                    <img class="img-responsive center-block" src="img/team/MikeDoe.jpg" alt="3">
                    <h4>Mike Doe</h4>
                    <p>Photographer</p>
                    <div class="team-social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials
============================================= -->
<section id="testimonials">
    <div class="container">
        <h2>Testimonials</h2>
        <hr class="light-sep">
        <p>What Clients Say About Us</p>
        <div id="owl-testi" class="owl-carousel owl-theme">
            <div class="item">
                <div class="quote">
                    <i class="fa fa-quote-left left fa-2x"></i>
                    <h5>I’am amazed, I should say thank you so much for your awesome template. Design is so 
good and neat, every detail has been taken care these team are realy amazing and talented! I will 
work only with <span>Rise</span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                </div>
            </div>
            <div class="item">
                <div class="quote">
                    <i class="fa fa-quote-left left fa-2x"></i>
                    <h5>I’am amazed, I should say thank you so much for your awesome template. Design is so 
good and neat, every detail has been taken care these team are realy amazing and talented! I will 
work only with <span>Rise</span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                </div>
            </div>
            <div class="item">
                <div class="quote">
                    <i class="fa fa-quote-left left fa-2x"></i>
                    <h5>I’am amazed, I should say thank you so much for your awesome template. Design is so 
good and neat, every detail has been taken care these team are realy amazing and talented! I will 
work only with <span>Rise</span>.<i class="fa fa-quote-right right fa-2x"></i></h5>

                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection
