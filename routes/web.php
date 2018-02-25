<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});


Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/login', function () {
    return view('pages.login');
});


Route::get('/view', function () {
    return view('pages.view');
});


Route::post('/view', function () {
    //echo 'hello i worked';
    //dd(request());
    $data = request()->all();
    echo "Body: " . $data['body'] , '<br>';
    echo "Body: " . $data['body'];
    echo "Body: " . $data['body'] , '<br>';
    echo "Body: " . $data['body'];
    //dd($data);

});

Route::get('/card', function () {
    return view('pages.card');
});
Route::post('/card', function () {
    //echo 'hello i worked';
    //dd(request());
    $data = request()->all();
    echo "Body: " . $data['body'] , '<br>';
    echo "Body: " . $data['body'];
    echo "Body: " . $data['body'] , '<br>';
    echo "Body: " . $data['body'];
    //dd($data);

});


Route::get('/signin', function () {
    return view('pages.signin');
});

Route::post('/signin', function () {
    //echo 'hello i worked';
    //dd(request());
    $data = request()->all();
    echo "Email: " . $data['email'] , '<br>';
    echo "password: " . $data['password'];
    //dd($data);

});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', function () {
    //echo 'hello i worked';
    //dd(request());
    $data = request()->all();
    echo "Email: " . $data['email'] , '<br>';
    echo "Subject: " . $data['subject'] , '<br>';
    echo "Body: " . $data['body'];

    //dd($data);

});
Route::get('/signup', function () {
    return view('pages.signup');
});

Route::post('/signup', function () {
    //echo 'hello i worked';
    //dd(request());
    $data = request()->all();
    echo "name: " . $data['name'] , '<br>';
    echo "email: " . $data['email'], '<br>';
    echo "password: " . $data['password'] , '<br>';
    echo "password: " . $data['password'];
    //dd($data);

});