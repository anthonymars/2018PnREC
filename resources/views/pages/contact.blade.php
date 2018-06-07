@extends('layouts.app')
@section('title')
    Get In Touch
@stop
@section('description')
    Charleston WV's Parks and Rec Department
@stop
@section('content')
    <section class="pt-5 centerPages">
        <div class="container py-5">
            <h1>Get In Touch</h1>
            <hr>
            <div class="row">
                <div class="col-md-4 pb-5">
                    <a href="/north-charleston"><img src="{{ asset('/images/centers/nc_site.jpg') }}" alt="center" class="img-fluid"></a>
                </div>
                <div class="col-md-8">
                    <h3>North Charleston Community Center:</h3>
                    <p><small>2009 7th Ave
                    <br />Charleston, WV 25387
                    <br />(304)348-6884
                    <br />Recreation Center Manager: <a href="mailto:billy.wright@cityofcharleston.org">Billy Wright</a>
                    <br />Program Coordinator: <a href="mailto:richard.clendenin@cityofcharleston.org">Richard Clendenin</a></small></p>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-4 pb-5">
                    <a href="/kanawha-city"><img src="{{asset('/images/centers/kcbuilding.jpg')}}" alt="center" class="img-fluid"></a>
                </div>
                <div class="col-md-8">
                    <h3>Kanawha City Community Center:</h3>
                    <p><small>3511 Venable Ave
                        <br />Charleston, WV 25301
                        <br />(304)348-6484
                        <br />Recreation Center Manager: <a href="mailto:dax.miller@cityofcharleston.org">Dax Miller</a>
                            <br />Program Coordinator: <a href="mailto:erika.crump@cityofcharleston.org">Erika Crump</a></small></p>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-4 pb-5">
                    <a href="/mlk-jr"><img src="{{ asset('/images/centers/mlk_site.jpg') }}" alt="center" class="img-fluid"></a>
                </div>
                <div class="col-md-8">
                    <h3>Martin Luther King Jr. Community Center:</h3>
                    <p><small>314 Donnally St.
                        <br />Charleston, WV 25301
                        <br />(304)348-6404
                            <br />Recreation Center Manager: <a href="mailto:jennifer.holley@cityofcharleston.org">Jennifer Holley</a></small>
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4 pb-5">
                    <a href="/roosevelt">
                        <img src="{{ asset('/images/centers/roosevelt_site.jpg') }}" alt="center" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-8">
                    <h3>Roosevelt Neighborhood Center:</h3>
                    <p><small>502 Ruffner Ave.
                        <br />Charleston, WV 25301
                        <br />(304)348-0529
                            <br />Neighborhood Center Manager: <a href="mailto:tonya.cummings@cityofcharleston.org">Tonya Cummings</a></small>
                    </p>
                </div>
            </div>

            <hr>
            <div class="row">
                <div class="col-md-4 pb-5">
                    <a href="/cato"><img src="{{asset('/images/centers/catobuilding.jpg')}}" alt="center" class="img-fluid"></a>
                </div>
                <div class="col-md-8">
                    <h3>Cato Park:</h3>
                    <p><small>200 Baker Lane
                        <br />Charleston, WV 25301
                        <br />(304)348-6860
                        <br />Director of Parks and Recreation: <a href="mailto:parksandrecreation@cityofcharleston.org" target="_blank">John Charnock</a>
                        <br />Manager of Leisure Services: <a href="mailto:lynn.watts@cityofcharleston.org" target="_blank">Lynn Watts</a>
                        <br />Office Support Specialist : <a href="mailto:leslee.myers@cityofcharleston.org" target="_blank">Leslee Myers</a>
                        <br />Office Support Specialist: <a href="mailto:shawnee.dunlap@cityofcharleston.org" target="_blank">Shawnee Dunlap</a>
                        <br />Program Coordinator Citywide Events: <a href="mailto:kelsey.gilbert@cityofcharleston.org" target="_blank">Kelsey Gilbert</a>
                        <br />Senior Program Coordinator Citywide Events: <a href="mailto:julianne.yacovone@cityofcharleston.org" target="_blank">Julianne Yacovone</a>
                            <br />General Info: <a href="mailto:parksandrecreation@cityofcharleston.org">Parks and Recreation</a></small>
                    </p>
                </div>
            </div>
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
            <p class="text-center"><span class="thick500">Follow us</span> on Facebook, Instagram, and Twitter! Use the hashtag <strong>#getactivecwv</strong> to share your experiences.</p>
            <p class="text-center"><i class="fa fa-facebook-square fa-2x"></i> <i class="fa fa-instagram fa-2x"></i> <i class="fa fa-twitter fa-2x"></i></p>
        </div>

    </section>

@stop