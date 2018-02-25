@extends('layouts.default')

@section('content')
    <table class="table">
        <thead>
        <div class="card mt-3 pl-2 pr-2">

            </div>

            <div class="card-body">

                <form action="/view" method="post">
                    {{ csrf_field() }}
        <tr>

            <th>DATA</th>
            <th>Delete</th>

        </tr>
        </thead>
        <tbody>
        <tr>

            <td><a href="/card" >IS601</a></td>
            <td> <div class="form-group">
                    <label for="email">click to delete</label>
                    <a href="#" class="btn btn-primary">delete</a>


                </div></td>

        </tr>
        <tr>

            <td><a href="/card" >MGMT650</a></td>
            <td> <div class="form-group">
                    <label for="email">click to delete</label>
                    <a href="#" class="btn btn-primary">delete</a>


                </div></td>

        </tr>
        <tr>

            <td><a href="/card" >HRM630</a></td>
            <td> <div class="form-group">
                    <label for="email">click to delete</label>
                    <a href="#" class="btn btn-primary">delete</a>


                </div></td>

        </tr>
        </tbody>
    </table>





            </form>
        </div>
    </div>




@endsection
