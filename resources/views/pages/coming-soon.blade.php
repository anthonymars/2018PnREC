@extends('layouts.app')
@section('title')
    Charleston, WV Parks and Rec
@stop
@section('description')
    Charleston WV's Parks and Rec Department
@stop
@section('content')
    <section id="info" class="py-5">
        <div class="container py-5">
           <h2 class="text-center">Charleston Parks and Recreation</h2>  
              <h2 class="text-center">

            <img src="{{ asset('/images/logos/parksnRec.png') }}" alt="" class="img-fluid mx-auto d-block">
                   <h3 class="text-center">
                    <ul>
                         <li> 	<u>Martin Luther King, Jr. Celebration </li></u>
                       <li>   Martin Luther King, Jr. Community Center 1/15/2024 </li> 
                         <li> 	Winter Series Races 12/17/2023, 1/14/2024 & 2/11/2024
                    5K Run	3K Walk
                    8K Run	4K Walk
                    10K Run	5K Walk </li>
                    <li>  	Urban Fishing Cato Park Swimming Pool 2/10/2023 & 2/11/2024 </li> 
                      
      
             </h3>
          
        </div>
    </section>
    <section id="homeBlocks" class="py-5">
        <div class="container">
            <div class="row py-3">
                <div class="col-lg-6 col-md-12 pb-4">
                    <div class="card">
                        <img src="{{ asset('/images/mids/centerBlock.jpg') }}" alt="Cato" class="card-img-top">
                        <div class="card-body blockHeight block1">
                            <h2 class="card-text text-center">
                                Find A Center
                            </h2>
                            <a href="/get-in-touch"><p class="card-text text-center">Contact Info</p></a>
                            <a href="/coming-soon"><p class="card-text text-center">Recreation Areas</p></a>
                            <p class="text-center"><a href="/get-in-touch"><i class="fa fa-envelope fa-2x"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <img src="{{ asset('/images/mids/todoBlock.jpg') }}" alt="Race" class="card-img-top">
                        <div class="card-body blockHeight block2">
                            <h2 class="card-text text-center">
                                Things To Do
                            </h2>
                            <a href="/events"><p class="card-text text-center">Our Events</p></a>
                            <p class="card-text text-center">Center Classes</p>
                            <p class="text-center"><a href="#"><i class="fa fa-group fa-2x"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-lg-6 col-md-12 pb-4">
                    <div class="card">
                        <img src="{{ asset('/images/mids/aboutBlock.jpg') }}" alt="Cato" class="card-img-top">
                        <div class="card-body blockHeight block3">
                            <h2 class="card-text text-center">
                                About Us
                            </h2>
                            <a href="/blogs"><p class="card-text text-center">Our Stories</p></a>
                            <a href="/cato"><p class="card-text text-center">Our History</p></a>
                            <p class="text-center"><a href="/cato"><i class="fa fa-leaf fa-2x"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <img src="{{ asset('/images/mids/waterfallBlock.jpg') }}" alt="Waterfall" class="card-img-top">
                        <div class="card-body blockHeight block4">
                            <h2 class="card-text text-center">
                                Pics Of Us
                            </h2>
                            <a href="/galleries"><p class="card-text text-center">All Galleries</p></a>
                            <a href="/gallery/cato"><p class="card-text text-center">Cato Pics</p></a>
                            <p class="text-center roundButton"><a href="/galleries"><i class="fa fa-camera-retro fa-2x"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="partOf">
        <div class="container py-5">
            <p class="text-center infoText">
                Follow Us Today
            </p>
            <h2 class="text-center">
                Share Your Experience
            </h2>
            <p class="text-center"><span class="thick500">Follow us</span> on Facebook, Instagram, Pinterest and Twitter! Use the hashtag <strong>#getactivecwv</strong> to share your experiences.</p>
            <p class="text-center"><a href="https://www.facebook.com/cwvparksandrecreation"><i class="fa fa-facebook-square fa-2x"></i></a> <a href="https://www.instagram.com/cwvparksandrecreation/"><i class="fa fa-instagram fa-2x"></i></a> <a href="https://www.pinterest.com/cwvparks/"><i class="fa fa-pinterest fa-2x"></i></a> <a href="https://twitter.com/cwvparks"><i class="fa fa-twitter fa-2x"></i></a></p>
        </div>

    </section>


@stop
