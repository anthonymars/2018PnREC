@extends('layouts.app')
@section('title')
    Galleries | Charleston, WV Parks and Rec
@stop
@section('description')
    Check out our pics! Charleston WV's Parks and Rec Department
@stop
@section('content')

    <section id="galleriesPage" class="py-5 galleryStyle">
        <div class="container py-5">
            <h1>Galleries</h1>
            <hr>
            @if($photobooks)
                @foreach($photobooks as $p)
                    <div class="row">
                        <div class="col-md-3">
                            @if(count($p->pics) > 0)
                                <img style="max-height:200px" src="/images/pics/sm/sm-{{ $p->pics[0]->image }}" alt="" class="img-fluid">
                            @endif
                        </div>
                        <div class="col-md-9">
                            <h2><a href="/gallery/{{ $p->slug }}">{{$p->title}}</a></h2>
                            <p>{{ $p->description }}</p>
                        </div>
                    </div>
                    <hr>
                @endforeach
            @endif
        </div>
    </section>
@stop