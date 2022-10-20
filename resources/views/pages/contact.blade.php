@extends('layouts.app')
@section('title')
    Get In Touch
@stop
@section('description')
    Get In Touch With The Charleston WV's Parks and Rec Department
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
                    <!--<br />Program Coordinator: <a href="mailto:Corey.Lowery@cityofcharleston.org">Corey Lowery</a>-->
                    <br />Program Coordinator: <a href="mailto:Alexandria.Gray@cityofcharleston.org">Alex Gray</a>
                     <br />Assistant Program Coordinator: <a href="mailto:Tonya.Barnett@cityofcharleston.org">Tonya Barnett</a>
                    <br /><strong>Hours:</strong>
                    <br />Monday - Friday 9am - 9pm
                    <br />Saturday 9am - 5pm
                    <br />Sunday Closed
                    <br /><strong>Pool Hours:</strong>
                    <br />Tuesday-Sunday 12pm-6pm
                    </small></p>
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
                        <br />Program Coordinator: <a href="mailto:erika.crump@cityofcharleston.org">Erika Crump</a>
                        <br />Program Coordinator: <a href="mailto:Kelly.Jones@cityofcharleston.org">Kelly Jones</a>
                       
                      <!--  <br />Custodial and Grounds Maintenance: Tyrone Scott -->
                        <br /><strong>Hours:</strong>
                        <br />Monday - Friday 9am - 9pm
                        <br />Saturday 9am - 5pm
                        <br />Sunday Closed
                     <br /><strong>Pool Hours:</strong>
                            <br />Tuesday - Sunday 12pm - 6pm
                           
                        </small></p>
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
                        <br />Program Coordinator:<a href="mailto:dax.miller@cityofcharleston.org">Cookie Miller </a>
                        <br />Program Coordinator:<a href="mailto:T'Andre.Boxley@cityofcharleston.org">T’Andre Boxley</a>
                        <br />Ass.Program Coordinator:<a href="mailto:Benita.Calloway@cityofcharleston.org">Benita Calloway</a>
                      
                        <br /><strong>Hours:</strong>
                        <br />Monday - Friday 9am - 9pm
                        <br />Saturday 9am - 5pm
                        <br />Sunday Closed
                        <br /><strong>Pool Hours:</strong>
                            <br />Tuesday - Sunday 12pm - 6pm
                        </small>
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
                         <br />Recreation Facilities Manager:<a href="mailto:dax.miller@cityofcharleston.org">Dax Miller </a>
                        <br />Neighborhood Center Manager: <a href="mailto:tonya.cummings@cityofcharleston.org">Tonya Cummings</a>
                        <br /><strong>Hours:</strong>
                        <br />Monday - Friday 12pm - 8pm
                        <br />Children not allowed until 12pm
                        <br />Saturday and Sunday Closed
                        </small>
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
                        <br />Director of Parks and Recreation: <a href="mailto:parksandrecreation@cityofcharleston.org" target="_blank">Rashaun Sayles</a>
                        <br />Deputy Director of Parks and Recreation: <a href="mailto:parksandrecreation@cityofcharleston.org" target="_blank">Jennifer Neal</a>
                        <br />Office Support Specialist : <a href="mailto:leeann.grogg@cityofcharleston.org" target="_blank">LeeAnn Grogg</a>
                    
                        <br />General Info: <a href="mailto:parksandrecreation@cityofcharleston.org">Parks and Recreation</a>
                        <br /><strong>Hours:</strong>
                        <br />Monday - Friday 8am - 4pm
                        <br />Saturday and Sunday Closed
                        <br /><strong>Pool Hours:</strong>
                           <br />Tuesday - Sunday 12pm - 6pm 
                        </small>
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
            <p class="text-center"><span class="thick500">Follow us</span> on Facebook, Instagram, Pinterest and Twitter! Use the hashtag <strong>#getactivecwv</strong> to share your experiences.</p>
            <p class="text-center"><a href="https://www.facebook.com/cwvparksandrecreation"><i class="fa fa-facebook-square fa-2x"></i></a> <a href="https://www.instagram.com/cwvparksandrecreation/"><i class="fa fa-instagram fa-2x"></i></a> <a href="https://www.pinterest.com/cwvparks/"><i class="fa fa-pinterest fa-2x"></i></a> <a href="https://twitter.com/cwvparks"><i class="fa fa-twitter fa-2x"></i></a></p>
        </div>

    </section>

@stop
