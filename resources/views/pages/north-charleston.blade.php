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
                            <li><strong>Computer Lab/ Homework Room</strong></li>
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
                        <p>North Charleston is the home of Capital City Cougars Youth Football</p>
                    </div>
                    
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
                            <!-- <br /><strong>Pool Hours:</strong>
                              <br />Open Saturdays and Sundays until Labor Day 12:00pm – 6:00pm -->

                            <br /><strong>Program  Coordinator:</strong>
                            <!--<br /><a href="mailto:Corey.Lowery@cityofcharleston.org"><i class="fa fa-envelope"></i> Corey Lowery</a> -->
                           <br /> <a href="mailto:Keenan.farmer@cityofcharleston.org"> <i class="fa fa-envelope"></i> Keenan Farmer</a>
                          <!--  <br /><a href="mailto:Kavon.Cutler@cityofcharleston.org"><i class="fa fa-envelope"></i> Kavon Cutler</a> -->
                           <br /><a href="mailto:Benita.Calloway@cityofcharleston.org"><i class="fa fa-envelope"></i> Julia Kinney &nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp</a 
                                                                                                                                                        </small>
                         <br /><strong>&nbsp;&nbsp &nbsp;&nbsp &nbsp;&nbsp</strong>
                            <br /><strong>Asst. Program  Coordinator:</strong>
                            <br /><a href="mailto:pamela.whitestone@cityofcharleston.org"><i class="fa fa-envelope"></i> Benita Calloway</a></small></p>

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
