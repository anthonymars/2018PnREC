@extends('layouts.app')
@section('title')
    Charleston, WV Parks and Rec
@stop
@section('description')
    Charleston WV's Parks and Rec Department
@stop
@section('content')
    <?php
        $countStuff = 0;
        $itemCount = count($p->pics) - 1;
    ?>

    <section id="galleriesPage" class="py-5">
        <div class="container py-5">
            <h1>{{ $p->title }} Gallery</h1>
            <hr>
            @foreach($p->pics as $pb)
                @if($countStuff == 0)
                <div class="row">
                @endif
                    <div class="col-md-3">
                        <img src="{{ asset('/images/pics/sm/sm-' . $pb->image) }}" alt="{{ $pb->title }}" class="img-fluid">
                        <p class="text-center"><small>{{ $pb->title }}</small></p>
                    </div>
                @if($countStuff == 4 or $countStuff == $itemCount)
                    </div>
                    <?php $countStuff = 0 ?>
                @endif
                <?php $countStuff = $countStuff + 1; ?>
            @endforeach
            <hr>
            @if(Auth::check() and Auth::user()->hasRole('SuperFly'))
                <div class="row">
                    <div class="col-md-6">
                        <h2>Add Picture</h2>
                        <form enctype="multipart/form-data" action="/admin/pics" method="POST">
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
            <a href="/galleries"><h3>All Galleries</h3></a>
        </div>
    </section>
@stop