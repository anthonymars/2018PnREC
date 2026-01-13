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

                   <h4><u>MONDAY</u></h4> 
<h6>  9-Noon - Pickleball</h6>
<h6>2pm-3:30pm – Sew Much Fun “Sewing Class”</h6>
<h6>2:30pm-5:30pm – PAAC 21st Century After-School Program</h6>
<h6>6pm-7:30pm – Youth Boxing</h6>
<h6>7pm-8:45pm – Adult Basketball</h6>
<h4><u>  TUESDAY</u></h4> 
<h6>2-5:30pm - Step by Step Afterschool Program</h6>
<h6>6-7:30pm - Martial Arts Class</h6>
<h6>6-7pm - Women's Fitness Hour</h6>
<h4><u>WEDNESDAY</u></h4> 
<h6>9-Noon - Pickleball</h6>
<h6>2-5:30pm - Step by Step Afterschool Program</h6>
<h6> 6-7pm - Women's Fitness Hour</h6>
<h6>6-9pm - Teen Night Basketball</h6>
<h4><u>THURSDAY</u></h4> 
<h6>2-5:30pm - Step by Step Afterschool Program</h6>
<h6>6-7pm - Women's Fitness Hour</h6>
<h6>6-7:30pm - Martial Arts Class</h6>
<h6>6-8pm - Co-Ed Volley Ball</h6>
<h4><u>FRIDAY</u></h4> 
<h6>9-Noon - Pickleball</h6>
<h6>2-5:30pm - Step by Step Afterschool Program</h6>
<h6>5-9pm - Biddy Ball Practices</h6>
<h4><u>SATURDAY</u></h4> 
<h6>9-Noon - Pickleball</h6>
<h6>Noon-2pm - Striders STARTS 1/04/25, ENDS 3/29/25</h6>
<h6>Noon-3pm - Card Sharks</h6>
                    
                                    
                    <p><small>3511 Venable Ave, Charleston, WV 25301 | (304)348-6484
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
                      <h4><u>MONDAY</u></h4> 
<h6>7-8:45pm  - Men's Night Basketball</h6>
<h6>6-7:30pm - Youth Boxing</h6>
    <h4><u>TUESDAY</u></h4> 
<h6>12-2pm - Pickleball</h6>
<h6>6-7:30pm - Youth Boxing</h6>
   <h4><u>WEDNESDAY</u></h4>  
<h6>12-2pm - Pickleball</h6>
<h6>6-7:30pm - Youth Boxing</h6>
<h6>6-8pm - Youth Movie Night</h6>
<h6>6:30-7:30pm - Zumba</h6>
   <h4><u>THURSDAY</u></h4> 
<h6>12-2pm - Pickleball</h6>
<h6>Third Thursday of the Month: 1:30-3pm - Senior Bingo</h6>
<h6>6-7:30pm - Youth Boxing</h6>
   <h4><u>FRIDAY</u></h4>  
<h6>5:30-7:30pm - Friday Funday STARTS 1/03/2025</h6>
<h6>First Friday of the Month: 6-8pm - Game Night</h6>
    <h4><u>SATURDAY</u></h4> 
<h6>9am-12pm - Futsal STARTS 12/14/2024, ENDS 3/29/2025</h6>
                    <p><small>314 Donnally St, Charleston, WV 25301 | (304)348-6404
                        </small>
                    </p>
                </div>
            </div>
       <hr>

            <div class="row">
                <div class="col-md-4 pb-5">
                   <a href="/roosevelt"><img src="{{ asset('/images/centers/roosevelt_site.jpg') }}" alt="center" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-8">
                    <h3>Roosevelt Neighborhood Center:</h3>
                     <h4><u>MONDAY</u></h4> 
                  <h6>  5-7pm – Ladies Only Shotokan Karate </h6>
                       <h6> 6-8pm – Men’s Night Basketball </h6>
                       <h4><u>TUESDAY</u></h4>
                       <h6>5-6pm – Shotokan Karate </h6>
                       <h6>5-6pm – Line Dance </h6>
                      <h4><u>WEDNESDAY</u></h4>
                       <h6>10am-1pm – East End Resource Center Senior Day</h6>
                      <h4><u>THURSDAY</u></h4>
                     <h6> 6-7:30pm – Shotokan Karate</h6>
                      <h6>noon-2pm – East End Resource Center Senior Day</h6>
                      <h4><u>FRIDAY</u></h4>
                      <h6>noon-2pm – East End Resource Center Senior Day</h6>

                    <!--    <li> Monday-Thursday 4pm-5pm – Men’s Fitness  </li>
                       <li> Tuesdays 5pm / $5 per class / 55+ years Free - Pickleball  </li>
                       <li> Wednesday & Thursday 12pm-2pm - Line Dance Class </li>
                       <li> Thursdays 6pm / $5 per class / 55+ years Free - Gentle Movement Yoga  </li>
                       <li>	 Mondays & Tuesdays 6pm-8pm – Men’s Basketball  </li>
                       <li>	 Fridays 4pm-6pm – Youth Sports  </li>
                        <li> Fridays 6pm-7pm – Beginner Pickleball  </li>
                       <li>	 Monday-Thursday – “Step by Step” Afterschool Program  </li> -->
                    </ul>
                    <p><small>502 Ruffner Ave., Charleston, WV 25301 | (304) 348-0529
                            <br />  Hours: Monday – Friday, Noon – 8pm
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
                       <h4><u>MONDAY</u></h4> 
                  <h6>  9am-12pm - Pickleball </h6>
                   <h6> 5:30-9pm - Charleston Table Tennis League</h6>

                <h4><u>TUESDAY</u></h4>
 <h6>9am-12pm - Pickleball</h6>
 <h6>5-8pm - Biddy Ball Practices</h6>
  <h4><u>WEDNESDAY</u></h4>
 <h6>Third Wednesday of the Month: 11am-12pm - Socializing Through Play</h6>
 <h6>5-8pm - Biddy Ball Practices</h6>
   <h4><u>THURSDAY</u></h4>
 <h6>9am-12pm - Pickleball</h6>
 <h6>5-6pm - Weight Lifting</h6>
 <h6>6-9pm - Men's Night Basketball</h6>
 <h4><u>FRIDAY</u></h4>
 <h6>9am-12pm - Pickleball
 <h6>Fourth Friday of the Month: 4-6pm - Senior Bingo</h6>
 <h6>Fourth Friday of the Month: 6-8pm - Adult Dodgeball League</h6>
 <h6>6-9pm - Family Game Night</h6>
<h4><u>SATURDAY</u></h4>
 <h6>9am-12pm - Co-Ed Volleyball</h6>
            
                    <p><small>2009 7th Ave., Charleston, WV 25387 | (304)348-0529
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
            <p class="text-center"><span class="thick500"></span>  Use <strong>#getactivecwv</strong> to share your experiences on Facebook, Instagram and Twitter!</p>
           <p class="text-center"><a href="https://www.facebook.com/cwvparksandrecreation"><i class="fa fa-facebook-square fa-2x"></i></a> <!-- <a href="https://www.instagram.com/cwvparksandrecreation/"><i class="fa fa-instagram fa-2x"></i></a> <a href="https://www.pinterest.com/cwvparks/"><i class="fa fa-pinterest fa-2x"></i></a> <a href="https://twitter.com/cwvparks"><i class="fa fa-twitter fa-2x"></i></a></p>-->
        </div>

    </section>

@stop
