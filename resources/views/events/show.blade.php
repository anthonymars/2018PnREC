@extends('layouts.app')
@section('title')
    Charleston, WV Parks and Rec
@stop
@section('description')
    Charleston WV's Parks and Rec Department
@stop
@section('content')

    <section id="eventsPage" class="py-5">
        <div class="container py-5">
            @if($e)
                <h1>{{ $e->event_name }}</h1>
                <p><small>{{ $e->event_location }}</small></p>

                <hr>
                <div class="row">
                    <div class="col-md-8 py-3">
                        <p><small>posted {{ $e->created_at->diffForHumans() }}</small></p>
                        <p>{!! $e->event_description !!}</p>
                        <p><small>{{$e->contact}}</small></p>
                        <p><small>{{$e->email}}</small></p>
                        <p>{{$e->event_name}} Dates:</p>
                        <ul>
                            @foreach($dates as $d)
                                <div class="">
                                    <li>{{ date('M d, Y', strtotime($d->date)) }}</li>
                                </div>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-4 py-3">
                        <div class="py-5">
                            <a href="#" data-toggle="modal" data-target="#eventModal{{ $e->id }}">
                                <img src="/images/events/2018/sm/{{ $e->image }}" alt="" class="img-fluid">
                            </a>
                        </div>

                    </div>
                </div>

            @endif
            <hr>
            <a href="/events" class="btn btn-main">Back</a>
                @if(Auth::check() and Auth::user()->hasRole('YoungFly'))
                    <a href="/events/{{$e->slug}}/edit" class="btn btn-main"><i class="fa fa-pencil"></i> Edit</a>
                    <a href="/events/{{$e->slug}}/delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                @endif
        </div>
    </section>

    <div class="modal fade" id="eventModal{{$e->id}}" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ $e->event_name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('/images/events/2018/lg/' . $e->image) }}" alt="{{ $e->event_name  }}" class="img-fluid">
                </div>

            </div>
        </div>
    </div>

@stop