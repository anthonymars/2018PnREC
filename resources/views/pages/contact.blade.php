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
                    <br />Program Coordinator: <a href="mailto:Keenan.farmer@cityofcharleston.org"> Keenan Farmer</a>
                    <br />Program Coordinator: <a href="mailto:Julia.Kinney@cityofcharleston.org"> Julia Kinney</a>
                    <br />Assistant Program Coordinator: <a href="mailto:pamela.whitestone@cityofcharleston.org">Pamela Whitestone</a>
                    <br /><strong>Hours:</strong>
                    <br />Monday - Friday 9am - 9pm
                    <br />Saturday 9am - 5pm
                    <br />Sunday Closed
                    <br /><strong>Pool Hours:</strong>
                    <br />Closed Monday – Friday
                    <br /> Open Saturdays 12pm – 6pm and Sundays 12pm – 5pm
                    <br />Last day of pool season is September 4th.
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
                        <br />Program Coordinator: <a href="mailto:Kelly.Jones@cityofcharleston.org">Kelly Jones</a>
                        <br />Program Coordinator: <a href="mailto:T'Andre.Boxley@cityofcharleston.org">T’Andre Boxley</a>
                <br />Assistant Program Coordinator: <a href="mailto:April.Meadows@cityofcharleston.org">April Meadows</a> 
                     
                       
                      <!--  <br />Custodial and Grounds Maintenance: Tyrone Scott -->
                        <br /><strong>Hours:</strong>
                        <br />Monday - Friday 9am - 9pm
                        <br />Saturday 9am - 5pm
                        <br />Sunday Closed
                     <br /><strong>Pool Hours:</strong>
                            <br />Pool is closed for the season
                           
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
                        <br />Program Coordinator:<a href="mailto:Donnelle.badger@cityofcharleston.org">Donnelle Badger </a>
                        <br />Program Coordinator:<a href="mailto:Spencer.Dean@cityofcharleston.org">Spencer Dean</a>
                        <br />Ass.Program Coordinator:<a href="mailto:Benita.Calloway@cityofcharleston.org">Benita Calloway</a>
                      
                        <br /><strong>Hours:</strong>
                        <br />Monday - Friday 9am - 9pm
                        <br />Saturday 9am - 5pm
                        <br />Sunday Closed
                        <br /><strong>Pool Hours:</strong>
                        <br />Closed Monday – Friday
                        <br /> Open Saturdays 12pm – 6pm and Sundays 12pm – 5pm
                        <br />Last day of pool season is September 4th.
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
                       <br />Parks and Recreation Facilities Manager:<a href="mailto:Trenten.samuel@cityofcharleston.org">Trenten Samuel </a> 
                        <br />Roosevelt Neighborhood Center Manager:<a href="mailto:Tonya.Cummings@cityofcharleston.org">Tonya Cummings </a>
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
                       <!--   <br />Director of Parks and Recreation:<a href="mailto:Rashaun.poore@cityofcharleston.org">Rashaun Poore </a> -->
                         <br />Manager Leisure Services:<a href="mailto:dax.miller@cityofcharleston.org">Dax Miller </a>
                        <br />Office Support Specialist: <a href="mailto:anita.miller@cityofcharleston.org">Anita Miller</a>
                    
                        <br />General Info: <a href="mailto:parksandrecreation@cityofcharleston.org">Parks and Recreation</a>
                        <br /><strong>Hours:</strong>
                        <br />Monday - Friday 8:30 am - 4:30 pm
                        <br />Saturday and Sunday Closed
                       <!--  <br />Pools close the day after Labor Day -->
                        <br /><strong>Pool Hours:</strong>
                           <br />Pool is closed for the season
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
            <p class="text-center"><span class="thick500"></span> Use <strong>#getactivecwv</strong> to share your experiences on Facebook, Instagram and Twitter!</p>
          <!--  <p class="text-center"><a href="https://www.facebook.com/cwvparksandrecreation"><i class="fa fa-facebook-square fa-2x"></i></a> <a href="https://www.instagram.com/cwvparksandrecreation/"><i class="fa fa-instagram fa-2x"></i></a> <a href="https://www.pinterest.com/cwvparks/"><i class="fa fa-pinterest fa-2x"></i></a> <a href="https://twitter.com/cwvparks"><i class="fa fa-twitter fa-2x"></i></a></p>-->
        </div>

    </section>

@stop
