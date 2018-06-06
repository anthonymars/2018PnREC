@extends('layouts.app')
@section('title')
    Charleston, WV Parks and Rec
@stop
@section('description')
    Charleston WV's Parks and Rec Department
@stop
@section('content')

    <section id="blogPage" class="py-5 blogStyle">
        <div class="container py-5">
            <h1>Our Stories</h1>
            <hr>
            @if($blogs)
                @foreach($blogs as $b)
                    <div class="row">
                        <div class="col-md-3">
                            <img style="max-height:200px" src="/images/blogs/sm/sm-{{ $b->image }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-9">
                            <h2><a href="/blogs/{{ $b->slug }}">{{$b->title}}</a></h2>
                            <p>by: {{ $b->user->name }} <small>{{ $b->created_at->diffForHumans() }}</small></p>
                        </div>
                    </div>
                    <hr>
                @endforeach
            @endif
        </div>
    </section>
@stop