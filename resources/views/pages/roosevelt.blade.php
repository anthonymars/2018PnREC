@extends('layouts.app')
@section('title')
    Roosevelt Community Center
@stop
@section('description')
    Roosevelt Community Center | Charleston WV's Parks and Rec Department
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
            <h1>Roosevelt</h1>
            <hr>
            <div class="row">
                <div class="col-md-8">
                    <h2>About Us</h2>
                    <p>Roosevelt’s history on the East End as a school is quite evident when you visit this center. Roosevelt School was bought for $10 by the City with plans to transform this facility into Charleston’s newest neighborhood center. While the Charleston Family Resource Center hosts their after-school program and the Charleston Police Department operates multiple divisions in Roosevelt, other spaces are available to the public free of charge. These spaces are first come, first served. If you have questions, please contact Center staff.</p>
                    <div class="diffText my-3">
                        <h3>Indoor Amenities</h3>
                        <ul>
                            <li><strong>Gymnasium</strong> with an indoor basketball court and kid-friendly rock wall</li>
                            <li><strong>Cardio Room</strong> with treadmills, ellipticals, and exercise bikes
                            </li>
                            <li><strong>Weight Room</strong> with free weights and cable machines</li>
                            <li><strong>Game Room</strong> with a pool table and table tennis</li>
                        </ul>
                        <p>Roosevelt also has an <strong>outdoor</strong> play area/playground for children to enjoy.
                        </p>
                        
                                 
                     </div>
                   
                         <h3>Weekly Activities</h3>
                         <li>Monday  6:00-8:00pm: -  Men’s Basketball Night   </li>
                         <li>Wednesday 9:00am-1:00pm: Senior Program </li>
                         <li>Wednesday 6:00-8:00:  WV Roller Derby Practice </li> 
                         <li>4th Wednesday of each month-5:30pm:  Open Art Studio-Art studio is available for a $5 fee.   </li>
                         <li> Thursdays 3:00-4:00pm: Youth Intermurals - For grade school students.  </li>
                         <li> Thursdays 5:00-6:00pm: Youth Intermurals  - For Middle School students. </li>
                         <li> Thursday 6:00-8:00pm:  AAU Practice & Biddy Basketball Practices </li>
                         <li> Thursday 6:30-7:30pm:  Shotokan Karate/ FREE Classes  for Ages 10 and Up </li>
                         <li> Monday-Friday 12:30-2:30pm: Pickleball </li>
                         <li> Tuesday, Wednesday, Friday 2:30-6:00pm: - Open Gym</li>
                         <li> Tuesday and Friday 6:00-8:00pm: 1/2 court open gym for everyone & 1/2 court pickleball  </li>
                           <h3>SPECIAL EVENTS</h3>
                      
                         </ul>
                   

                </div>
                <div class="col-md-4">
                    <h2>Get In Touch</h2>
                    <p><small>502 Ruffner Ave.
                            <br />Charleston, WV 25301
                            <br />(304)348-0529
                            <br /><strong>Hours:</strong>
                            <br />Monday - Friday 9am - 8pm
                            <br />Children not allowed until 12pm
                            <br />Saturday and Sunday Closed
                            <br /><strong>Neighborhood Center Manager:</strong>
                            <br /><a href="mailto:tonay.cummings@cityofcharleston.org"><i class="fa fa-envelope"></i> Tonya Cummings</a></small>
                    </p>
                    <hr>
                    <h2>Photos</h2>
                    @if($photobook)
                        <?php $counter = 0; ?>
                        @foreach($photobook->pics as $p)
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
                                    @if($countStuff == 1 or $countStuff == $itemCount)
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
                    <a href="/gallery/roosevelt" class="btn btn-main">Roosevelt Gallery</a>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
                <p class="text-center">Come check out the Roosevelt Community Center!</p>
            </div>
        </div>
    </section>

@stop
