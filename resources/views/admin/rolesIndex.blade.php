@extends('layouts.app')
@section('title')
    Charleston, WV Parks and Rec
@stop
@section('description')
    Charleston WV's Parks and Rec Department
@stop
@section('content')

    <section id="rolesPage" class="py-5">
        <div class="container py-5">
            <h1>User Roles</h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    @if(count($roles) > 0)
                        @foreach($roles as $r)
                            <p>{{ $r->name }}</p>
                        @endforeach
                    @else
                        <p>No Roles Yet</p>
                    @endif
                </div>
            </div>

        </div>
    </section>
@stop