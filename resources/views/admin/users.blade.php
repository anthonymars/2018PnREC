@extends('layouts.app')
@section('title')
    Charleston, WV Parks and Rec
@stop
@section('description')
    Charleston WV's Parks and Rec Department
@stop
@section('content')

    <section id="usersPage" class="py-5">
        <div class="container py-5">
            <h1>Users</h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    @foreach($users as $u)
                        <p><a href="/admin/users/{{ $u->id }}/edit">{{ $u->name }}</a></p>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
@stop