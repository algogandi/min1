@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>signup</h1>
            <p class="lead">signup</p>
        </div>

        <div class="card-body">

            <form action="/signup" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name"> name</label>
                    <input name="name" type="name" class="form-control" id="name" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="email"> email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input name="password" type="password" class="form-control" id="password" rows="3"></input>
                </div>
                <div class="form-group">
                    <label for="password">confirm password</label>
                    <input name="password" type="password" class="form-control" id="password" rows="3"></input>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Signup</button>

            </form>
        </div>
    </div>

@endsection
