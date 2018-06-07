@extends('layouts.app')
@section('title')
    Kanawha City Community Center
@stop
@section('description')
    Charleston WV's Parks and Rec Department
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
                    <p>The North Charleston Community Center located at 2009 7th Avenue in Charleston has plenty of outdoor space to be active. With multiple softball fields (also home to The Western Generals, Charleston’s youth football league), 2 outdoor play areas, an outdoor basketball court, and the only center with a dog park, the whole family has a chance to be active.</p>
                    <div class="diffText my-3">
                        <p>The indoor basketball court at North Charleston is the only gymnasium complete with basketball, volleyball and pickleball lines. The center offers an adequate size weight room that offers free weights, as well as machines and a large cardio room with treadmills, ellipticals and exercise bikes.</p>
                    </div>
                    <p>The outdoor space offers a softball field, an outdoor seasonal swimming pool, an outdoor play area and an “outdoor classroom” Natural Playground. The Natural Playground offers youth open spaces, climbing and crawling spaces, nature art areas, gardens and more. MLKJ also offers 4 outdoor tennis courts and a tennis practice wall for those times you need to get in a little solo practice. Use of the center and the center’s outdoor areas are free for community use.</p>

                </div>
                <div class="col-md-4">
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