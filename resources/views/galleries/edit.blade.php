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
            <h1>Edit {{ $g->title }}</h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <form action="/gallery/{{ $g->slug }}/update" method="POST">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Gallery Name</label>
                            <input type="text" name="title" class="form-control" value="{{ $g->title }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description of Gallery</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ $g->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-main" type="submit"><i class="fa fa-pencil"></i> Edit Gallery</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@stop