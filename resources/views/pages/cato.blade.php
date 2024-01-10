@extends('layouts.app')
@section('title')
    Cato Park
@stop
@section('description')
    Cato Park | Charleston WV's Parks and Rec Department
@stop
@section('content')
<?php
$countStuff = 0;
if($photobook) {
    $itemCount = count($photobook->pics) - 1;
}
?>

<section id="catoPage" class="pt-5">
    <div class="container py-5">
        <h1>Cato Park</h1>
        <hr>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                    <p>In 1970, Charleston attorney, Henry S. Cato, created the 'Cato Park Foundation' with the heart of a true Charlestonian: develop a park for the people. Almost 50 years later, we hope we are making Cato proud!</p>
                    <div class="diffText my-3">

                        <p>Located on Baker Lane, in the hills of Charleston's West Side, lies our beautiful 90+ acre park. Cato Park encompasses the recreational and leisure amenities most communities sought-after. Picnic areas, ample parking, a playground, seasonal swimming pool, and more are just a few ways we have made Cato's aspirations to have a park- free of any charge whatsoever- for those of Charleston to benefit and enjoy themselves.</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <h2>Get In Touch</h2>
                    
                    <p><small>
                   <B> Rashaun Poore </B>, Director Parks and Recreation  <br />
                   <B> Dax Miller </B>, Manager Leisure Services <br />
                  <!-- <B> Lee Ann Grogg </B>, Office Support Specialist <br /> -->
                            <br />  200 Baker Lane
                            <br />Charleston, WV 25301
                            <br />(304)348-6860
                            <br /><strong>Hours:</strong>
                           <br /> Open: 8:30 am - 4:30 pm Monday - Friday
                            <br />Closed Saturday and Sunday
                           <!-- <br /><strong>Pool Hours:</strong>
                            <br />Tuesday - Sunday 12pm - 6pm -->
                            <br /><strong>Director of Parks and Recreation:</strong>
                            <br /><a href="mailto:parksandrecreation@cityofcharleston.org"><i class="fa fa-envelope"></i> Rashaun Poore</a></p>
                </div>
            </div>
            <hr>
            <h2>Trail System</h2>
            <div class="row">
                <div class="col-md-4">
                    <a href="#" data-toggle="modal" data-target="#catoModal">
                        <img src="{{ asset('/images/maps/cato-small.jpg') }}" alt="Cato" class="img-fluid">
                    </a>
                    <div class="modal fade" id="catoModal" tabindex="-1" role="dialog" aria-labelledby="catoModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Cato Trails</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('/images/maps/cato.jpg') }}" alt="Cato" class="img-fluid">
                                </div>

                            </div>
                        </div>
                    </div>

                    <p><small>Cato Trail System</small></p>
                </div>
                <div class="col-md-8">
                    <p>Cato Park is a gem all of its own. Within this inter-city park you can play a round on our nine hole 3-par golf course which is said to be one of the oldest courses in the state. Not much of a golfer? Give our 14-hole foot golf course a try on our 36-acre golf course. Grabbed your attention with soccer? Be sure to check out our Loren Treister Soccer Field for practice and play.</p>
                    <p>Didn't think there could possibly be more? Well may we invite you to join us on our growing 5+ mile trail system right here in Cato Park: hikers, bikers, runners/walkers, and furry-friends alike are always welcome. </p>
                </div>
            </div>
            <hr>
            <h2>Photos</h2>
            @if($pics)
                <?php  $counter =  0; ?>
                @foreach($pics as $p)
                    @if($countStuff === 0)
                        <div class="row">
                    @endif
                            <div class="col-md-4 py-3">
                                <a href="#" data-toggle="modal" data-target="#cato2Modal{{ $p->id }}">
                                    <img src="/images/pics/sm/sm-{{ $p->image }}" alt="{{ $p->title }}" class="img-fluid">
                                </a>
                                <div class="modal fade" id="cato2Modal{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="cato2ModalLabel" aria-hidden="true">
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

                            </div>

                            @if(($countStuff === 3) or ($itemCount === $counter))
                                </div>
                            @endif
                    <?php
                        $countStuff++;
                        $counter++;
                        if ($countStuff === 4) {
                            $countStuff = 0;
                        }
                    ?>
                @endforeach
            @endif

            <p class="py-3">
                <a href="/gallery/cato" class="btn btn-main">See More</a>
            </p>
            <hr>
            <p class="text-center">We hope you'll recreate with us and think of Cato Park as fondly as we do.</p>
        </div>
    </div>
</section>

@stop
