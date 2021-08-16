@extends('layouts.app')
@section('title')
    North Charleston Community Center
@stop
@section('description')
    North Charleston Community Center | Charleston WV's Parks and Rec Department
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
            <h1>North Charleston</h1>
            <hr>
            <div class="row">
                <div class="col-md-8">
                   <p>While the NCCC has been a long standing center in the community, estimated back to the 1950s, North Charleston’s Community Center was re-established in 1988. Our largest center sitting at 24,000 square feet, “North” is an ample center for activities, events, and general recreation. While many of our outdoor fields require scheduling in advance, you may still enjoy our facility free of charge—on a first come, first served basis. If you have questions, please contact Center staff.</p>
                    <div class="diffText my-3">
                        <h3>Indoor Amenities</h3>
                        <ul>
                            <li><strong>Gymnasium</strong> with indoor, basketball court is the only court complete with basketball, volleyball and pickleball lines
                            </li>
                            <li><strong>Weight Room</strong> that offers free weights, as well as cable machines
                            </li>
                            <li><strong>Cardio Room</strong> with treadmills, ellipticals and exercise bikes (the largest of our Center’s)</li>
                            <li><strong>Women's Fitness Room</strong> with weights, a cable-styled machine, and cardio equipment for the ladies who want to workout in a more controlled space (no men!)</li>
                            <li><strong>Game Room</strong> that includes a pool table and a ping pong table</li>
                        </ul>
                        <p><small>North also has one of the larger <strong>Meeting Rooms</strong> available to the public to rent at a reasonable rate.
                            </small>
                        </p>
                        <h3>Outdoor Amenities</h3>
                        <ul>
                            <li>Multiple <strong>Softball Fields</strong></li>
                            <li>2 outdoor <strong>play areas/playgrounds</strong></li>
                            <li>Outdoor <strong>basketball Court</strong></li>
                            <li>the only center with a <strong>dog park</strong></li>
                            <li>Outdoor, seasonal <strong>pool</strong></li>
                        </ul>
                        <p>North is also home to The Western Generals- Charleston’s youth football league.</p>
                    </div>
                    <h3>Weekly Activities</h3>
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
                        <li> Game Room Daily:- This room houses a variety of games for youth, such as pool, air hockey, foosball, basketball shoot and table tennis and board games. </li>
                        <li> Future Events/Activities : -  </li>
                        <li> March 20th, 8pm-11pm. Teen Night, TikTok Teen Dance Class   </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h2>Get In Touch</h2>
                    <p><small>2009 7th Ave
                            <br />Charleston, WV 25387
                            <br />(304)348-6884
                            <br /><strong>Hours:</strong>
                           <br />Monday - Friday 9am - 9pm
                            <br />Saturday 9am - 5pm 
                            <br />Sunday Closed
                           
                            <br /><strong>Program  Coordinator:</strong>
                            <br /><a href="mailto:Corey.Lowery@cityofcharleston.org"><i class="fa fa-envelope"></i> Corey Lowery</a>
                            <br /><a href="mailto:Alexandria.Gray@cityofcharleston.org"><i class="fa fa-envelope"></i> Alex Gray</a>
                            <br /><strong>Asst. Program  Coordinator:</strong>
                            <br /><a href="mailto:Tonya.Barnett@cityofcharleston.org"><i class="fa fa-envelope"></i> Tonya Barnett</a></small></p>

                    <hr>
                    <h2>Photos</h2>
                    @if($photobook)
                        <?php $counter = 0; ?>
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
                    <a href="/gallery/north-charleston" class="btn btn-main">North Charleston Gallery</a>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
                <p class="text-center">Come check out the North Charleston Community Center!</p>
            </div>
        </div>
    </section>

@stop
