@extends('layouts.app')
@section('title')
    Charleston, WV Parks and Rec
@stop
@section('description')
    Charleston WV's Parks and Rec Department
@stop
@section('content')
    <section id="info" class="py-5">
        <div class="container py-5">
           <h2 class="text-center">Local Events</h2>  
             <h2 class="text-center">This event listing is provided in partnership with the Charleston Convention and Visitors Bureau. To submit an event, please visit https://events.charlestonwv.com/event/create. </h2>  
              <h2 class="text-center">
            <img src="{{ asset('/images/logos/parksnRec.png') }}" alt="" class="img-fluid mx-auto d-block">
                    <h4 class="text-left"> 
                        <div id="localist-widget-57991154" class="localist-widget"></div><script defer type="text/javascript"

src="https://events.charlestonwv.com/widget/combo?schools=charlestonwv&exclude_groups=city_of_charleston&days=60&num=50&target_blank=1&experience=inperson&container=localist-widget-57991154&template=modern"></script><div id="lclst_widget_footer"><a style="margin-left:auto;margin-right:auto;display:block;width:81px;margin-top:10px;" title="Widget powered by Concept3D Event Calendar Software" href="https://www.localist.com?utm_source=widget&utm_campaign=widget_footer&utm_medium=branded%20link"><img src="//d3e1o4bcbhmj8g.cloudfront.net/assets/platforms/default/about/widget_footer.png" alt="Localist Online Calendar Software" style="vertical-align: middle;" width="81" height="23"></a></div>
<!--<h5>DEC 15, 2024 (2P)  – Charleston Winter Series 5k – starts at UC Pharmacy School Parking Lot </h5></br>
<h5>DEC 18, 2024 (4:30P) – Christmas Party at Roosevelt Neighborhood Center  </h5></br>
<h5>DEC 19, 2024 (5P-8P) – Hoops with Santa at North Charleston Community Center  </h5></br>
<h5>DEC 23, 2024 (10A-noon) – Breakfast with Santa at Kanawha City Community Center  </h5></br>
<h5>JAN 12, 2025 (2P) – Charleston Winter Series 8k – starts at UC Pharmacy School Parking Lot </h5></br>
<h5>FEB 16, 2025 (2P) – Charleston Winter Series 10k– starts at UC Pharmacy School Parking Lot </h5> -->
 </h4>
 </div>
    </section>
    <section id="homeBlocks" class="py-5">
        <div class="container">
            <div class="row py-3">
                <div class="col-lg-6 col-md-12 pb-4">
                    <div class="card">
                        <img src="{{ asset('/images/mids/centerBlock.jpg') }}" alt="Cato" class="card-img-top">
                        <div class="card-body blockHeight block1">
                            <h2 class="card-text text-center">
                                Find A Center
                            </h2>
                            <a href="/get-in-touch"><p class="card-text text-center">Contact Info</p></a>
                            <a href="/coming-soon"><p class="card-text text-center">Recreation Areas</p></a>
                            <p class="text-center"><a href="/get-in-touch"><i class="fa fa-envelope fa-2x"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <img src="{{ asset('/images/mids/todoBlock.jpg') }}" alt="Race" class="card-img-top">
                        <div class="card-body blockHeight block2">
                            <h2 class="card-text text-center">
                                Things To Do
                            </h2>
                            <a href="/events"><p class="card-text text-center">Our Events</p></a>
                            <p class="card-text text-center">Center Classes</p>
                            <p class="text-center"><a href="#"><i class="fa fa-group fa-2x"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-lg-6 col-md-12 pb-4">
                    <div class="card">
                        <img src="{{ asset('/images/mids/aboutBlock.jpg') }}" alt="Cato" class="card-img-top">
                        <div class="card-body blockHeight block3">
                            <h2 class="card-text text-center">
                                About Us
                            </h2>
                            <a href="/blogs"><p class="card-text text-center">Our Stories</p></a>
                            <a href="/cato"><p class="card-text text-center">Our History</p></a>
                            <p class="text-center"><a href="/cato"><i class="fa fa-leaf fa-2x"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <img src="{{ asset('/images/mids/waterfallBlock.jpg') }}" alt="Waterfall" class="card-img-top">
                        <div class="card-body blockHeight block4">
                            <h2 class="card-text text-center">
                                Pics Of Us
                            </h2>
                            <a href="/galleries"><p class="card-text text-center">All Galleries</p></a>
                            <a href="/gallery/cato"><p class="card-text text-center">Cato Pics</p></a>
                            <p class="text-center roundButton"><a href="/galleries"><i class="fa fa-camera-retro fa-2x"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="partOf">
        <div class="container py-5">
            <p class="text-center infoText">
                Follow Us Today
            </p>
            <h2 class="text-center">
                Share Your Experience
            </h2>
            <p class="text-center"><span class="thick500">Follow us</span> on Facebook, Instagram, Pinterest and Twitter! Use the hashtag <strong>#getactivecwv</strong> to share your experiences.</p>
            <p class="text-center"><a href="https://www.facebook.com/cwvparksandrecreation"><i class="fa fa-facebook-square fa-2x"></i></a> <a href="https://www.instagram.com/cwvparksandrecreation/"><i class="fa fa-instagram fa-2x"></i></a> <a href="https://www.pinterest.com/cwvparks/"><i class="fa fa-pinterest fa-2x"></i></a> <a href="https://twitter.com/cwvparks"><i class="fa fa-twitter fa-2x"></i></a></p>
        </div>

    </section>


@stop
