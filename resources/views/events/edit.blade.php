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
            <h1>Edit {{ $e->event_name }}</h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <form enctype="multipart/form-data" action="/events/{{ $e->slug }}/update" method="POST">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="event_location">Event Location</label>
                            <select name="event_location" id="">
                                <option value="{{ $e->event_location }}">{{ $e->event_location }}</option>
                                <option value="Cato Park">Cato Park</option>
                                <option value="Kanawha City Community Center">Kanawha City Community Center</option>
                                <option value="Magic Island">Magic Island</option>
                                <option value="Martin Luther King Jr. Community Center">Martin Luther King Jr.</option>
                                <option value="North Charleston Community Center">North Charleston Community Center</option>
                                <option value="Roosevelt Neighborhood Center">Roosevelt Neighborhood Center</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Event Name</label>
                            <input type="text" name="event_name" class="form-control" value="{{ $e->event_name }}">
                        </div>

                        <div class="form-group">
                            <label for="event_dates">Event Dates</label>
                            <div class="input-group date" data-provide="datepicker" data-date-multidate="10">
                                <input type="text" class="form-control" name="event_dates" value="{{ $dates }}">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="event_description">Event Description</label>
                            <textarea name="event_description" id="" cols="30" rows="10" class="summernote"> {{ $e->event_description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="contact">Contact Info (Name and Phone Number)</label>
                            <input type="text" name="contact" class="form-control" value="{{ $e->contact }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" value="{{ $e->email }}">
                        </div>
                        <div class="form-group">
                            <label for="image">Image size: 600 x 600</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="support_doc">Supporting Document</label>
                            <input type="file" name="support_doc">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-main" type="submit"><i class="fa fa-pencil"></i> Edit Event</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@stop