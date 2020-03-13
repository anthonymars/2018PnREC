@extends('layouts.app')
@section('title')
    Martin Luther King Jr. Community Center
@stop
@section('description')
    Martin Luther King Jr. Community Center | Charleston WV's Parks and Rec Department
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
            <h1>Martin Luther King Jr.</h1>
            <hr>
            <div class="row">
                <div class="col-md-8">
                    <h2>About Us</h2>
                    <p>Established in 1978, the “King Center” is conveniently located near the Charleston Town Center Mall. This 21,000 square foot facility was brought into the City of Charleston around the same time as the Kanawha City Community Center. Patrons are welcome to use our Center’s amenities free of charge. The Majority of our spaces are first come, first served.
                        If you have questions, please contact Center staff.</p>
                    <div class="diffText my-3">
                        <h3>Indoor Amenities</h3>
                        <ul>
                            <li><strong>Boxing Room</strong> complete with speedbags, heavy bags and a downsized boxing ring</li>
                            <li><strong>Gynmasium</strong> with full size, indoor basketball court, which has been recently refurbished</li>
                            <li><strong>Weight Room</strong> with free weights and machines</li>
                            <li><strong>Cardio Room</strong> with treadmills, elliptical, and an exercise bike</li>
                            <li><strong>Game Room</strong> with a pool table, air hockey table, and a foosball table</li>
                        </ul>
                        <h3>Outdoor Amenities</h3>
                        <ul>
                            <li><strong>Softball field</strong></li>
                            <li>Outdoor seasonal <strong>swimming pool</strong></li>
                            <li>Outdoor <strong>play area/playground</strong></li>
                            <li>“Outdoor classroom”-- <strong>Natural Playground</strong> that offers youth open spaces, climbing and crawling spaces, nature art areas, gardens and more</li>
                            <li>4 Outdoor <strong>tennis courts</strong> and a tennis practice wall</li>
                        </ul>

                    </div>
                    <h3>Weekly Activities</h3>
                    <ul>
                        <ul>
                        <li>Mondays @ 6pm - Close / Men’s Basketball Night </li>
                        <li>Third Monday of every month - Bingo @  1:00 pm - 3:30 pm</li>
                        <li>Tuesday @ 12pm-2pm - Men’s Fitness & Fellowship Basketball </li>
                        <li>Senior Strength & Conditioning @ 12:30pm-2pm </li>
                        <li>Spring Biddy Basketball League Practice @ 6pm-8pm </li>
                        <li>Wednesday @ 6pm-Close: Teen Hoop Night </li>
                        <li>Thursday @ 12pm-2pm: Men’s Fitness & Fellowship Basketball  </li>
                        <li>Spring Biddy Basketball League Practice @ 6pm-8pm </li>
                        <li>Friday @ 6:00pm – 9:00pm   - Futsal</li>
                        <li> After School Program - Monday - Friday from  2 pm - 5:30 pm
                        <li>Saturday @ 1pm-4pm</li>
                        <li>Saturday  @ 10am-1pm  - Spring Biddy Basketball League Games /March 7 - April 4  </li>
                        <li>Saturday  @ 11am-1pm  - Painting Party / First Saturday of every month</li>
                        <li>Saturday - Youth Basketball Practice -Coaches must call to reserve court time  </li>
                        <li>Future Events/Activities are listed down  </li>
                        <li>Kid’s Night April 17th 6:00pm – 9:00pm Ages 5-12. </li>
                        <li>Teen Night May 15th 8:00pm – 11:00pm ages 13-18. </li>
                        <li>Free tutoring for Math, Science , ACT/SAT &  Reading. </li>
                        <li>USA Boxing. Youth & Adults </li>
                        <li>Spring Biddy Basketball League. Youth ages 5-7 yrs </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h2>Get In Touch</h2>
                    <p><small>314 Donnally St.
                            <br />Charleston, WV 25301
                            <br />(304)348-6404
                            <br /><strong>Hours:</strong>
                            <br />Monday - Friday 9am - 9pm
                            <br />Saturday 9am - 5pm
                            <br />Sunday Closed
                            <br /><strong>Pool Hours:</strong>
                            <br />Tuesday - Sunday 12pm - 6pm
                            <br /><strong>Recreation Center Manager:</strong>
                            <br /><a href="mailto:jennifer.holley@cityofcharleston.org"><i class="fa fa-envelope"></i> Jennifer Holley</a></small>
                    </p>
                    <hr>
                    <h2>Photos</h2>
                    @if($photobook)
                        <?php  $counter =  0; ?>
                        @foreach($pics as $p)
                            @if($countStuff == 0)
                                <div class="row py-3">
                                    @endif
                                    <div class="col-md-6 py-3">
                                        <a href="#" data-toggle="modal" data-target="#ncModal{{ $p->id }}">
                                            <img src="/images/pics/sm/sm-{{ $p->image }}" alt="{{ $p->title }}" class="img-fluid">
                                        </a>
                                        <div class="modal fade" id="ncModal{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="ncModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">{{ $p->title }}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{ asset('/images/pics/lg/lg-' . $p->image) }}" alt="{{ $p->title  }}" class="img-fluid">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal -->
                                        <!-- title
                                        <p class="text-center"><small>{{ $p->title }}</small></p>
                                        -->
                                    </div>
                                    @if($countStuff == 1 or $counter == $itemCount)
                                </div>
                            @endif
                                <?php
                                $countStuff++;
                                $counter++;
                                if ($countStuff === 2) {
                                    $countStuff = 0;
                                }
                                ?>
                        @endforeach
                    @endif
                    <hr>
                    <a href="/gallery/martin-luther-king-jr" class="btn btn-main">Martin Luther King Jr. Gallery</a>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
                <p class="text-center">Come check out the Martin Luther King Jr. Community Center!</p>
            </div>
        </div>
    </section>

@stop
