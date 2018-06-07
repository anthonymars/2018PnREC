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
            <h1>Edit {{ $b->title }}</h1>
            @if(Auth::check() and Auth::user()->hasRole('SuperFly'))
                <a href="/blogs/{{ $b->slug }}/delete" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
            @endif
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <form enctype="multipart/form-data" action="/blogs/{{ $b->slug }}/update" method="POST">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Blog Name</label>
                            <input type="text" name="title" class="form-control" value="{{ $b->title }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Story</label>
                            <textarea name="body" cols="30" rows="10" class="form-control summernote"> {{ $b->body }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Image size: 800 x 800</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="video"><strong>Video URL</strong><br>If using video, <br>Click the 'SHARE' link on Youtube<br>
                                Copy the characters after the 'https://youtu.be/'<br>
                                Example: https://youtu.be/V2oW8TbVpzA<br>
                                Copy and Paste the 'V2oW8TbVpzA'</label>
                            <input type="text" name="video" class="form-control" value="{{ $b->video }}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-main" type="submit">Edit Blog</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3>Current Picture</h3>
                    <img src="/images/blogs/sm/sm-{{ $b->image }}" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </section>
@stop