@extends('layouts.app')
@section('title')
    Weekly Activities
@stop
@section('description')
    Get In Touch With The Charleston WV's Parks and Rec Department
@stop
@section('content')
    <section class="pt-5 centerPages">
        <div class="container py-5">
            <h1>Weekly Activities</h1>
            <!--
            <div class="row">
                <div class="col-md-4 pb-5">
                    <a href="/cato"><img src="{{asset('/images/centers/catobuilding.jpg')}}" alt="center" class="img-fluid"></a>
                </div>
                <div class="col-md-8">
                    <h3>Cato Park:</h3>

                </div>
            </div>
            -->
            <hr>
            <div class="row">
                <div class="col-md-4 pb-5">
                    <a href="/kanawha-city"><img src="{{asset('/images/centers/kcbuilding.jpg')}}" alt="center" class="img-fluid"></a>
                </div>
                <div class="col-md-8">
                    <h3>Kanawha City Community Center:</h3>
                    <ul>
                        <li>Tuesdays - Adult, Full-Court Basketball - 6:00pm</li>
                        <li>Wednesdays - Teen Basketball - 6:00pm</li>
                    </ul>
                    <p><small>3511 Venable Ave
                            <br />Charleston, WV 25301
                            <br />(304)348-6484
                        </small>
                    </p>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-md-4 pb-5">
                    <a href="/mlk-jr"><img src="{{ asset('/images/centers/mlk_site.jpg') }}" alt="center" class="img-fluid"></a>
                </div>
                <div class="col-md-8">
                    <h3>Martin Luther King Jr. Community Center:</h3>
                    <ul>
                        <li>Mondays - Adult, Full-Court Basketball - 6:30pm - 8:30pm</li>
                        <li>Saturdays - Adult, Full-Court Basketball - 12:30pm - 2:30pm</li>
                    </ul>
                    <p><small>314 Donnally St.
                            <br />Charleston, WV 25301
                            <br />(304)348-6404
                        </small>
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4 pb-5">
                    <a href="/north-charleston"><img src="{{ asset('/images/centers/nc_site.jpg') }}" alt="center" class="img-fluid"></a>
                </div>
                <div class="col-md-8">
                    <h3>North Charleston Community Center:</h3>
                    <ul>
                        <li>Mondays - The Charleston Table Tennis League  - 5:30pm - 8:45pm</li>
                        <li>Tuesdays -  Students / Simply Fun Tutoring - 5:30pm - 7:00pm</li>
                        <li>Tuesdays - Adult Volleyball  - 6pm – 8:45pm</li>
                        <li>Wednesdays - Pickle Ball  - 6:00pm - 8:45pm</li>
                        <li>Thursdays - Biddy Basketball  - 5:30pm - 8:45pm</li>
                        <li>Fridays - Hip Hop Dance Classes  - 6:30pm - 8pm</li>
                        <li>Fridays - Special Olympics Basketball   - 6:00pm - 8:30pm</li>
                        <li>Mondays and Wednesdays -  Karate   - 6pm – 7:30pm</li>
                        <li>Tuesdays, Thursdays and Fridays -  Pickle Ball    - 9:00am - 12noon</li>
                        <li>Tuesdays and Thursdays  -  Zumba    - 5:30pm – 6:30pm</li>
                        <li>Saturdays - Adult Volleyball   - 9am – noon</li>
                        <li>3rd Thursdays of each Month: - Bingo   - 1pm – 3:30pm </li>
                        <li> Game Room: Daily:This room houses a variety of games for youth, such as pool, air hockey, foosball, basketball shoot and table tennis and board games. </li>
                    </ul>
                    <p><small>2009 7th Ave.
                            <br />Charleston, WV 25387
                            <br />(304)348-0529
                        </small>
                    </p>

                </div>
            </div>
            <!--
            <hr>
            <div class="row">
                <div class="col-md-4 pb-5">
                    <a href="/roosevelt">
                        <img src="{{ asset('/images/centers/roosevelt_site.jpg') }}" alt="center" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-8">
                    <h3>Roosevelt Neighborhood Center:</h3>

                </div>
            </div>
            -->
        </div>
    </section>
    <section id="partOf">
        <div class="container py-5">
            <p class="text-center infoText">
                Keep In Touch
            </p>
            <h2 class="text-center">
                Share Your Experience
            </h2>
            <p class="text-center"><span class="thick500">Follow us</span> on Facebook, Instagram, Pinterest and Twitter! Use the hashtag <strong>#getactivecwv</strong> to share your experiences.</p>
            <p class="text-center"><a href="https://www.facebook.com/cwvparksandrecreation"><i class="fa fa-facebook-square fa-2x"></i></a> <a href="https://www.instagram.com/cwvparksandrecreation/"><i class="fa fa-instagram fa-2x"></i></a> <a href="https://www.pinterest.com/cwvparks/"><i class="fa fa-pinterest fa-2x"></i></a> <a href="https://twitter.com/cwvparks"><i class="fa fa-twitter fa-2x"></i></a></p>
        </div>

    </section>

@stop
