@extends('layouts.app')
@section('title')
    Charleston, WV Parks and Rec
@stop
@section('description')
    Charleston WV's Parks and Rec Department
@stop
@section('content')

    <section id="galleriesPage" class="py-5">
        <div class="container py-5">
            <h1>Galleries</h1>
            <hr>
            @if($photobooks)
                @foreach($photobooks as $p)
                    <div class="row">
                        <div class="col-md-3">
                            <img style="max-height:200px" src="/images/pics/sm/sm-{{ $p->pics[0]->image }}" alt="" class="img-fluid">
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