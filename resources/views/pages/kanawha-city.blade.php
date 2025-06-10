Fbox
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
                   <p>Established in 1978, KCCC is the third community center brought in by Charleston Parks and Recreation (and at that time Public Grounds). This center is a multifaceted facility that is free to our community members. With 17,000 square feet, this center boasts plenty of activities, recreational space, and amenities available for public use. Majority of our amenities are on a first come, first served basis. If you have questions, please ask Center staff.</p>
                    <div class="diffText my-3">
                        <h3>Indoor Amenities</h3>
                        <ul>
                           <li><strong>Weight Room</strong> complete with individual free weights, standard barbells, and numerous cable machines</li>
                           <li><strong>Gymnasium</strong> with a regulation size, indoor basketball court (completely redone 2017)</li>
                            <li><strong>Game Room</strong> that includes table tennis, a pool table, corn hole boads, and a foosball table</li>
                            <li><strong>Cardio Room</strong> with treadmills, ellipticals, and exercise bikes.</li>
                             <li><strong>Computer Lab / Homework Room </strong> </li>
                            </ul>
             <p> <small>While our amenities are free, KCCC does offer a 20x25 Meeting Room at an affordable rate that’s perfect for birthdays, parties, family gatherings and more.  </small></p>
                        </p>
                        <h3>Outdoor Amenities</h3>
                       <ul>
                           <ul>
                            <li>8 outdoor <strong>tennis courts, basketball court</strong></li>
                            <li>Outdoor, <strong>seasonal swimming pool</strong> that's 25 meters in length</li>
                            <li>A large <strong>play area/playground</strong> for children</li>
                            <li>Little League <strong>baseball field</strong> (by schedule only)</li>
                          
                        </ul>
                        <p><small>KCCC is also home to the UC Softball Field used by the UC women’s softball team for practice. Their field is also utilized for soccer practice, inter-murals and summer softball leagues.
                       </small>  </p>
                    </div>
                    
                </div>
               <div class="col-md-4">
                    <h2>Get In Touch</h2>
                    <p><small>3511 Venable Ave
                            <br />Charleston, WV 25304
                            <br />(304)348-6484
                            <br /><strong>Hours:</strong>
                            <br />Monday - Friday 9am - 9pm
                            <br />Saturday 9am - 5pm 
                          <br />Sunday Closed 
                           <!-- <br /><strong>Pool Hours:</strong>  -->
                           <!-- <br />Tuesday - Sunday 12pm - 6pm
                            <br />Lap Swimming 9am - 11am -->
                           <!-- <br /><strong>Recreation  Manager: </strong> -->
                           
                            <br /><strong>Program Coordinator: </strong>
                             <br /><a href="mailto:T'Andre.Boxley@cityofcharleston.org"><i class="fa fa-envelope"></i>  T’Andre Boxley</a>
                             <br /><a href="mailto:tyrone.scott@cityofcharleston.org"><i class="fa fa-envelope"></i>Tyrone Scott</a>
                         <br /><strong> Assistant Program Coordinator: </strong>
                            <br />  <a href="mailto:April.Meadows@cityofcharleston.org"> <i class="fa fa-envelope"></i>April Meadows</a>
             </small></p>

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
                    <a href="/gallery/kanawha-city" class="btn btn-main">Kanawha City Gallery</a>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
                <p class="text-center">Come check out the Kanawha City Community Center!</p>
            </div>
        </div>
    </section>

@stop
