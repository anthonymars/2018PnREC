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
                        <!-- <li>Monday – Thursday 9:30 am – 3 pm - AARP Tax Aid- AARP representatives offer FREE tax aid to the public. Program ends April 15th.  </li> -->
                        <li>Mondays, Wednesdays & Saturdays 9am-12pm (Mon. & Wed.); 9-11am (Sat.) - Pickleball </li>
                        <li>Mondays and Thursdays 6pm – 9pm Church League Basketball </li> 
                        <li> Tuesdays 6-9 pm  -  Men’s Night </li>
                        <li> Thursdays 6-9 pm  - Teen Night </li>
                        <li> Every 2nd Friday of the month 1-3 pm  - Senior Day </li>
                         <li> Every 3rd Friday of the month 6-8pm   - Painting Party / $5 per session </li>
                         <li> Saturdays 11am-1pm  - Striders Running Club </li>
                        
                        <!-- <li> Future Events/Activities ---  </li>
                          <li>  **** Rethink Your Drink - Days and Time TBD </li>
                          <li> ****Every Monday, Wednesday, and Thursday 6:00-7:00pm / Ends April 2nd  </li>
                          <li>  **** Tuesday, March 17 9am – 10 am / Music In Our Schools Concert </li>
                          <li>  **** Thursday, April 9th- 8 AM to 4 PM  - 4-H Fun Day </li>
                          <li>  **** Mountain East Conference Tennis Tournament April 23rd -26th  </li>
                          <li>  **** WV HS Tennis Regionals May 4th-5th   </li>
                          <li>  **** KCMS County Tennis Tournament May 11th-12th   </li>
                          <li>  **** WVHS State Tournament May 13th-16th   </li>
                         <li>     ---- Our Facility Offer :  ------ </li> 
                        <li>       *Gymnasium  </li>
                        <li>       *Weight Room  </li>
                        <li>       *Cardio Room   </li>
                        <li>       *Homework/Tutoring Room  </li>
                        <li>       *Outdoor Swimming Pool  </li>
                        <li>       *Community Room (available for rentals)  </li>
                        <li>       *Arts Room (available for rentals)  </li>
                        <li>       *Playground  </li>
                        <li>       *Outdoor Basketball Court  </li>
                        <li>       *Outdoor Tennis Courts  </li>-->
                        <li>	 Monday, Wednesday & Friday 9:30am-11am – Senior Exercise Class</li>
                        <li>	 3rd Tuesday of every month 6pm-8pm – Charleston Coin Club</li>
                        <li>	 Tuesday, Wednesday & Thursday 6pm-7pm – Women’s Fitness Hour</li>
                        <li>	 Wednesdays 7:30pm-8:30pm – Co-Ed Volleyball</li>
                        <li>	 Thursdays 5:45pm-6:45pm – Youth Nature Hike</li>
                        <li>	 Fridays 12pm-3pm – Card Sharks</li>
                       <li>	 Biddy Basketball Practices – Reservations available</li>
                       <li>	 Monday-Thursday – “Step by Step” Afterschool Program</li>




                        
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
                        <li>Tuesdays & Thursdays  6pm - 8pm  Men’s Basketball Night </li>
                        <li>Third Monday of every month - Bingo @  1:00 pm - 3:30 pm</li>
                        <li>Tuesday @ 12pm-2pm - Men’s Fitness & Fellowship Basketball </li>
                        <li>Senior Strength & Conditioning @ 12:30pm-2pm </li>
                        <li>Spring Biddy Basketball League Practice @ 6pm-8pm </li>
                        <li>Thursday @ 12pm-2pm: Men’s Fitness & Fellowship Basketball  </li>
                        <li>Spring Biddy Basketball League Practice @ 6pm-8pm </li>
                        <li>Friday @ 6:00pm – 9:00pm   - Futsal</li>
                        <li> After School Program - Monday - Friday from  2 pm - 5:30 pm
                        <li>Saturday @ 1pm-4pm</li>
                        <li>Saturday  @ 10am-1pm  - Spring Biddy Basketball League Games /March 7 - April 4  </li>
                        <li>Saturday  @ 11am-1pm  - Painting Party / First Saturday of every month</li>
                        <li>Saturday - Youth Basketball Practice -Coaches must call to reserve court time  </li>
                        <li>Sundays 9am-1pm – Flag Football League</li>
                        <li> Monday, Wednesday & Friday 6pm-8pm – USA Boxing </li>
                        <li> Tuesdays & Thursdays 12pm-2pm – Fellowship Basketball </li>
                        <li> Fridays 6pm-7pm – Co-Ed Volleyball </li>
                        <li> Fridays 5:30pm-7:30pm – Youth Art Classes </li>
                        <li> Saturdays 3pm-4:45pm – Girls’ Basketball </li>
                        <li> Biddy Basketball Practices – Reservations available </li>
                        <li>Monday-Friday – “PAAC” (Partnership of African American Churches) Afterschool Program  </li>

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
                      
                        <li>Tuesdays -  Students / Simply Fun Tutoring - 5:30pm - 7:00pm</li>
                        <li>Tuesdays - Adult Volleyball  - 6pm – 8:45pm</li>
                        <li> Wednesdays 6pm-8:30pm – Teen Game Night</li>
                        <li>Thursdays - Biddy Basketball  - 5:30pm - 8:45pm</li>
                        <li>Wednesdays 10:30am-1pm – Socializing through Play</li>
                        <li>Fridays - Special Olympics Basketball   - 6:00pm - 8:30pm</li>
                        <li>Tuesdays, Thursdays and Fridays -  Pickle Ball    - 9:00am - 12noon</li>
                        <li>Tuesdays and Thursdays  -  Zumba    - 5:30pm – 6:30pm</li>
                        <li>Saturdays - Adult Volleyball   - 9am – noon</li>
                        <li>3rd Thursdays of each Month: - Bingo   - 1pm – 3:30pm </li>
                        <li> Game Room Daily:- This room houses a variety of games for youth, such as pool, air hockey, foosball, basketball shoot and table tennis and board games. </li>
                        <li> Biddy Basketball Practices – Reservations available </li>
                        <li> Monday-Thursday – “Bob Burdett” Afterschool Program </li>
                        
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
