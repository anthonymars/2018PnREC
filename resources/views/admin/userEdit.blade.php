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
            <h1>{{ $user->name }}</h1>
            <hr>
            <form action="/admin/users/{{ $user->id }}/update" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="roles">Roles</label>
                    <select name="role[]" class="form-control" id="" multiple>
                        @foreach($roles as $r)
                            <option value="{{ $r->name }}"
                                @if(in_array($r->name, $selectedRoles)) selected="selected"
                                @endif>
                                    {{ $r->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-main" type="submit">Save User</button>
                </div>
            </form>




        </div>
    </section>

@stop