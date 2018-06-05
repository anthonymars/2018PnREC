@extends('layouts.app')
@section('title')
    Charleston, WV Parks and Rec
@stop
@section('description')
    Charleston WV's Parks and Rec Department
@stop
@section('content')

    <section id="blogPage" class="py-5">
        <div class="container py-5">
            @if($b)
            <h1>{{ $b->title }}</h1>
            <hr>
                    <div class="row">
                        <div class="col-md-6 py-3">
                            <p>by: {{ $b->user->name }} <small>{{ $b->created_at->diffForHumans() }}</small></p>
                            <p>{!! $b->body !!}</p>
                        </div>
                        <div class="col-md-6 py-3">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $b->video }}"></iframe>
                            </div>
                            <img src="/images/blogs/lg/lg-{{ $b->image }}" alt="" class="img-fluid py-5">

                        </div>
                    </div>
                    <hr>
                <a href="/galleries" class="btn btn-main">All Galleries</a>
            @endif
        </div>
    </section>
@stop