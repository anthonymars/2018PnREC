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
            <div class="row">
                @foreach($photobooks as $p)
                    <p><a href="/gallery/{{ $p->slug }}">{{$p->title}}</a></p>
                @endforeach
            </div>
            @endif
        </div>
    </section>
@stop