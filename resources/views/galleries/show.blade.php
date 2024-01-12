@extends('layouts.app')
@section('title')
    {{ $p->title }} Gallery | Charleston, WV Parks and Rec
@stop
@section('description')
    {{ $p->title }} Pics! Charleston WV's Parks and Rec Department
@stop
@section('content')
    <?php
        $countStuff = 0;
         if(count($p->pics) > 0) {
        $itemCount = count($p->pics) - 1;
        }
    ?>

    <section id="galleriesPage" class="py-5">
        <div class="container py-5">
            <h1>{{ $p->title }} Gallery</h1>
            @if(Auth::check() and Auth::user()->hasRole('SuperFly'))
                <a href="/gallery/{{$p->slug}}/edit" class="btn btn-main"><i class="fa fa-pencil"></i> Edit</a>
                <a href="/gallery/{{$p->slug}}/delete" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
            @endif
            <hr>
            @if(count($p->pics) > 0)
                <?php  $counter =  0; ?>
                @foreach($p->pics as $pb)
                    @if($countStuff === 0)
                        <div class="row">
                            @endif
                            <div class="col-md-3">
                                <a href="#" data-toggle="modal" data-target="#{{$pb->slug}}Modal{{ $pb->id }}">
                                    <img src="{{ asset('/images/pics/sm/sm-' . $pb->image) }}" alt="{{ $pb->title }}" class="img-fluid">
                                </a>
                                <div class="modal fade" id="{{ $pb->slug }}Modal{{$pb->id}}" tabindex="-1" role="dialog" aria-labelledby="ncModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{ $pb->title }}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset('/images/pics/lg/lg-' . $pb->image) }}" alt="{{ $pb->title  }}" class="img-fluid">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->
                                <p class="text-center"><small>{{ $pb->title }}</small></p>
                                <p>
                                    @if(Auth::check() and Auth::user()->hasRole('SuperFly'))
                                        <a href="/pics/{{$pb->id}}/delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                    @endif
                                </p>
                            </div>
                            @if($countStuff === 3 or $itemCount === $counter)
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
            @else
                <h2>No Pictures Yet</h2>
            @endif
            <hr>
            @if(Auth::check() and Auth::user()->hasRole('SuperFly'))
                <div class="row">
                    <div class="col-md-6">
                        <h2>Add Picture</h2>
                        <form enctype="multipart/form-data" action="/pics" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title">
                                <input type="hidden" name="photobook_id" value="{{ $p->id }}">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-main" type="submit">Add Image</button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
           <!-- <a href="/galleries"><h3>All Galleries</h3></a>  -->
        </div>
    </section>
@stop
