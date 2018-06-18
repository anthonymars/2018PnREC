@extends('layouts.app')
@section('title')
    Things To Do | Charleston, WV Parks and Rec
@stop
@section('description')
    Things You Can Do! Charleston WV's Parks and Rec Department
@stop
@section('content')

    <section id="eventsPage" class="py-5 eventsStyle">
        <div class="container py-5">
            <h1>Our Events</h1>
            <p>Choose a center:</p>

            <div class="row">
                <div class="col-md-4 py-2">
                    <a style="color:white;" href="/events" class="btn btn-main form-control">All Events</a>
                </div>
                <div class="col-md-4 py-2">
                    <form method="post">
                        {{ csrf_field() }}
                        <input type="hidden" value="Cato Park">
                        <button class="btn btn-main form-control" name="location" value="Cato Park" type="submit">Cato Park</button>
                    </form>
                </div>
                <div class="col-md-4 py-2">
                    <form method="post">
                        {{ csrf_field() }}
                        <input type="hidden" value="Kanawha City Community Center" name="location">
                        <button class="btn btn-main form-control" type="submit">Kanawha City</button>
                    </form>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4 py-2">
                    <form method="post">
                        {{ csrf_field() }}
                        <input type="hidden" value="Martin Luther King Jr. Community Center" name="location">
                        <button class="btn btn-main form-control" type="submit">King Center</button>
                    </form>
                </div>
                <div class="col-md-4 py-2">
                    <form method="post">
                        {{ csrf_field() }}
                        <input type="hidden" value="North Charleston Community Center" name="location">
                        <button class="btn btn-main form-control" type="submit">North Charleston</button>
                    </form>
                </div>
                <div class="col-md-4 py-2">
                    <form method="post">
                        {{ csrf_field() }}
                    <input type="hidden" value="Roosevelt Neighborhood Center" name="location">
                    <button class="btn btn-main form-control" type="submit">Roosevelt</button>
                    </form>
                </div>

            </div>


            <hr>
            @if($dates)
                @foreach($dates as $d)
                    <div class="row">
                        <div class="col-md-3">
                            <img style="max-height:200px" src="/images/events/2018/sm/{{ $d->event->image }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-9">
                            <h2>{{ $d->date }}</h2>
                            <h2><a href="/events/{{ $d->event->slug }}">{{$d->event->event_name}}</a></h2>
                            <p>at: {{ $d->event->event_location }} </p>
                        </div>
                    </div>
                    <hr>
                @endforeach
                    {{ $dates->links() }}
            @endif

        </div>
    </section>
@stop