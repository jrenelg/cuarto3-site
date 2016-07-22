@extends('layouts.app')

@section('content')
<!-- Contact Us
============================================= -->
<section id="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <hr class="sep">
        <p>Get In Touch</p>
        <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="Email" placeholder="Email">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                </div>
                <a href="#" class="btn-block">Send</a>
            </form>
        </div>
    </div>
</section>
<!-- Google Map
============================================= -->
<div id="map"></div>
@endsection

@section('footer')
<!-- GOOGLE MAP -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        
        /***************** Google Map ******************/
        function initialize() {
            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: new google.maps.LatLng(39.92757, -83.160207),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    });
</script>
@endsection