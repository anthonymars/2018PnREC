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


                <form action="/events/location" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <select name="location" id=""class="form-control">
                            <option value="all">All Events</option>
                            <option value="cato">Cato Park</option>
                            <option value="kc">Kanawha City Community Center</option>
                            <option value="mi">Magic Island</option>
                            <option value="mlk">Martin Luther King Jr. Community Center</option>
                            <option value="nc">North Charleston Community Center</option>
                            <option value="roosevelt">Roosevelt Neighborhood Center</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-main" type="submit">See Center Events</button>
                    </div>
                </form>


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

            @else
                <h2>Sorry, No Events Yet</h2>
            @endif

        </div>
    </section>
@stop