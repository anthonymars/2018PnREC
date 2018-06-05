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
            <h1>Create A Role</h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <form action="/admin/roles" method="POST">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Role Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-main" type="submit">Add Role</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@stop