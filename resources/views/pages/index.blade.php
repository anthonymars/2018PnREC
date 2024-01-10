@extends('layouts.app')
@section('title')
    Charleston, WV Parks and Rec
@stop
@section('description')
    Charleston WV's Parks and Rec Department
@stop
@section('content')
    <section id="carousel">
        <section id="myCarousel">
            <div id="carouselMain" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#carouselMain" data-slide-to="0"></li>
                    <li data-target="#carouselMain" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item carousel-image-1 active">
                        <div class="container">
                            <div class="carousel-caption text-right mb-2">
                                <!--<h1 class="">Check Out Cato!</h1>-->
                                 <!--<h2 style="color:red;">NOTE:Due to COVID-19, all Community Centers are closed indefinitely!</h2>-->
                                  <a href="https://www.charlestonwv.gov/government/city-departments/parks-recreation" class="btn btn-main btn-lg"> Park & Rec Center</a>
                                 <a href="/coming-soon" class="btn btn-main btn-lg">upcoming Events</a>
                                <a href="/cato" class="btn btn-main btn-lg">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item carousel-image-2">
                        <div class="container">
                            <div class="carousel-caption text-center mb-2">
                                <!--<h1 class="">Hikes, Camps, Fun!</h1>
                                <h2 style="color:white;" >NOTE:Due to COVID-19, all Community Centers are closed indefinitely!</h2>-->
                              <!--  <a href="/events" class="btn btn-main btn-lg">Find an Event</a> --> 
                                  <a href="/coming-soon" class="btn btn-main btn-lg">Find an Event</a>
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="carousel-item carousel-image-2">
                        <div class="container">
                            <div class="carousel-caption text-right mb-5">
                                <h1 class="display-4">Music Every Friday</h1>
                                <a href="/2018-events" class="btn btn-outline-yellow btn-lg">2018 Events</a>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </section>


        </div>
    </section>
    <section id="info" class="pt-5">
        <div class="container">
            <p class="text-center infoText">
                Get to Know. 
            </p>

             <p class="text-center infoText">
           <center><a href="https://www.facebook.com/cwvparksandrecreation/"> Visit us in our Facebook page to get latest updates !</a></center>
           </p>
            <h2 class="text-center">
                Charleston Parks and Recreation
            </h2>

            <p class="text-center">As a department we are committed to bringing fun and enjoyable events and activities to the community. Our main goal is for a happy, healthy, and active Charleston. We are dedicated to making our city a better place to live.
            </p>
            <p class="text-center"><strong><span class="thick500">GET ACTIVE WITH US CHARLESTON WEST VIRGINIA!</span></strong></p>
            <img src="{{ asset('/images/logos/parksnRec.png') }}" alt="" class="img-fluid mx-auto d-block">
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
                          <!--  <a href="/events"><p class="card-text text-center">Our Events</p></a> -->
                              <a href="/coming-soon"><p class="card-text text-center">Our Events</p></a>
                            <a href="/weekly-fun"><p class="card-text text-center">Weekly Fun</p></a>
                            <p class="text-center"><a href="/events"><i class="fa fa-group fa-2x"></i></a></p>
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
                           <!-- <a href="/blogs"><p class="card-text text-center">Our Stories</p></a> -->
                            <a href="/cato"><p class="card-text text-center">Our History</p></a>
                            <p class="text-center"><a href="/blogs"><i class="fa fa-leaf fa-2x"></i></a></p>
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
              <!--  Follow Us Today -->
            </p>
            <h2 class="text-center">
                 Share Your Experience
            </h2>
            <p class="text-center"><span class="thick500"></span>  Use <strong>#getactivecwv</strong> to share your experiences on Facebook, Instagram and Twitter!</p>
        <p class="text-center"><a href="https://www.facebook.com/cwvparksandrecreation"><i class="fa fa-facebook-square fa-2x"></i></a> 
             <!--  <a href="https://www.instagram.com/cwvparksandrecreation/"><i class="fa fa-instagram fa-2x"></i></a> <a href="https://www.pinterest.com/cwvparks/"><i class="fa fa-pinterest fa-2x"></i></a> <a href="https://twitter.com/cwvparks"><i class="fa fa-twitter fa-2x"></i></a></p> -->
        </div>

    </section>


@stop
