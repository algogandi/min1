@extends('layouts.default')

@section('content')


    <div class="card" style="width: 20rem;">

        <div class="card-block">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">There you should find the  information Card </p>



            <form action="/view" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="body"> Subject</label>
                    <input name="body" type="body" class="form-control" id="body" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="body"> From email</label>
                    <input name="body" type="body" class="form-control" id="body" placeholder="from email">
                </div>
                <div class="form-group">
                    <label for="body">message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>

                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->

        </div>
    </div>




@endsection
