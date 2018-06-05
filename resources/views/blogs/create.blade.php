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
            <h1>Create A Blog</h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <form enctype="multipart/form-data" action="/blogs" method="POST">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Blog Name</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="description">Story</label>
                            <textarea name="body" cols="30" rows="10" class="form-control summernote"></textarea>
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
                            <input type="text" name="video" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-main" type="submit">Add Blog</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@stop