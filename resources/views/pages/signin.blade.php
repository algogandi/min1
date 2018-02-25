@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>signin</h1>
            <p class="lead">signin</p>
        </div>

        <div class="card-body">

            <form action="/signin" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email"> username</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="username">
                </div>

                <div class="form-group">
                    <label for="password">passwpord</label>
                    <input name="password" type="password" class="form-control" id="password" rows="3"></input>
                </div>
                <button type="submit" class="btn btn-primary mb-2">signin</button>

            </form>
        </div>
    </div>

@endsection
