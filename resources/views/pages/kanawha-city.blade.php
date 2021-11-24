@extends('layouts.app')
@section('title')
    Kanawha City Community Center
@stop
@section('description')
    Kanawha City Community Center | Charleston WV's Parks and Rec Department
@stop
@section('content')
    <?php
    $countStuff = 0;
    if($photobook) {
        $itemCount = count($photobook->pics) - 1;
    }
    ?>
    <section class="pt-5 centerPages">
        <div class="container py-5">
            <h1>Kanawha City</h1>
            <hr>
            <div class="row">
                <div class="col-md-8">
                    <h2>About Us</h2>
                    <p>Established in 1978, KCCC is the third community center brought in by Charleston Parks and Recreation (and at that time Public Grounds). This center is a multifaceted facility that is free to our community members. With 17,000 square feet, this center boasts plenty of activities, recreational space, and amenities available for public use. Majority of our amenities are on a first come, first served basis. If you have questions, please ask Center staff.</p>
                    <div class="diffText my-3">
                        <h3>Indoor Amenities</h3>
                       <ul>
                           <li><strong>Gymnasium</strong> with a regulation size, indoor basketball court (completely redone 2017)</li>
                           <li><strong>Game Room</strong> that includes table tennis, a pool table, corn hole boads, and a foosball table</li>
                           <li><strong>Weight Room</strong> complete with individual free weights, standard barbells, and numerous cable machines</li>
                           <li><strong>Cardio Room</strong> with treadmills, ellipticals, and exercise bikes.</li>
                            <li> <strong>Computer Lab/Homework Room  </li>
                         
                       </ul>
                        <p> <small>While our amenities are free, KCCC does offer a 20x25 Meeting Room at an affordable rate that’s perfect for birthdays, parties, family gatherings 
                        and more.  </small></p>
                        <h3>Outdoor Amenities</h3>
                        <ul>
                            <li>8 outdoor <strong>tennis courts</strong></li>
                            <li>Outdoor, <strong>seasonal pool</strong> that's 25 meters in length</li>
                            <li>Outdoor <strong>basketball court</strong> </li>
                            <li>A large <strong>play area/playground</strong> for children</li>
                            <li>Little League <strong>baseball field</strong> (by schedule only)</li>
                            <li> <strong>Outdoor Seasonal Swimming Pool   </li>
                        </ul>
 <p><small>KCCC is also home to the UC Softball Field used by the UC women’s softball team for practice. Their field is also utilized for soccer practice, inter-murals and summer softball leagues.
                       </small>  </p>
                  </div>
              </div>
                                                         
           
