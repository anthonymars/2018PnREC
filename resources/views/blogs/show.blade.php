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
                        <div class="col-md-8 py-3">
                            <p>by: {{ $b->user->name }} <small>{{ $b->created_at->diffForHumans() }}</small></p>
                            <p>{!! $b->body !!}</p>
                        </div>
                        <div class="col-md-4 py-3">
                            @if($b->video)
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $b->video }}"></iframe>
                                </div>
                            @endif
                            <a href="#" data-toggle="modal" data-target="#blogModal{{ $b->id }}">
                                <img src="/images/blogs/lg/lg-{{ $b->image }}" alt="" class="img-fluid py-5">
                            </a>

                        </div>
                    </div>

            @endif
        </div>
    </section>
    <div class="modal fade" id="blogModal{{$b->id}}" tabindex="-1" role="dialog" aria-labelledby="blogModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $b->title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('/images/blogs/lg/lg-' . $b->image) }}" alt="{{ $b->title  }}" class="img-fluid">
                </div>

            </div>
        </div>
    </div>
@stop