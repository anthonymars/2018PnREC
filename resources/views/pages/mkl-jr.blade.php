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
                        <li>Mondays - Adult, Full-Court Basketball - 6:30pm - 8:30pm</li>
                        <li>Saturdays - Adult, Full-Court Basketball - 12:30pm - 2:30pm</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h2>Get In Touch</h2>
                    <p><small>314 Donnally St.
                            <br />Charleston, WV 25301
                            <br />(304)348-6404
                            <br />Recreation Center Manager:
                            <br /><a href="mailto:jennifer.holley@cityofcharleston.org"><i class="fa fa-envelope"></i> Jennifer Holley</a></small>
                    </p>
                    <hr>
                    <h2>Photos</h2>
                    @if($photobook)
                        @foreach($photobook->pics as $p)
                            @if($countStuff == 0)
                                <div class="row">
                                    @endif
                                    <div class="col-md-6">
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
                                        <p class="text-center"><small>{{ $p->title }}</small></p>
                                    </div>
                                    @if($countStuff == 2 or $countStuff == $itemCount)
                                </div>
                                <?php $countStuff = 0 ?>
                            @endif
                            <?php $countStuff = $countStuff + 1; ?>
                        @endforeach
                    @endif
                    <hr>
                    <a href="/gallery/mlk-jr" class="btn btn-main">Martin Luther King Jr. Gallery</a>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
                <p class="text-center">Come check out the Martin Luther King Jr. Community Center!</p>
            </div>
        </div>
    </section>

@stop