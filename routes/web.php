<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

//if mainpage changed to welcome it will direct to laravel
Route::get('/', function () {
    return view('mainpage');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/add-student', function() {
    return view('add-student');
});

Route::get('/student', [StudentController::class, 'index']);
Route::resource('addstudent', StudentController::class);

/*
Route::group([], function()
{
    Route::get('/first',function()
    {
    echo "first route";
    });
    Route::get('/second',function()
    {
    echo "second route";
    });
    Route::get('/third',function()
    {
    echo "third route";
    });
});


//prefix = static (prefix/url)
//url: localhost/tutorial/aws
Route::group(['prefix' => 'tutorial'], function()
{
    Route::get('/aws',function()
    {
    echo "aws tutorial";
    });
    Route::get('/jira',function()
    {
    echo "jira tutorial";
    });
    Route::get('/testing',function()
    {
    echo "testing tutorial";
    });
});

//simple page. no need url
Route::get('simple-route', function () {
    return 'This is Simple Route Example of my Class';
    });

//make sure the id are same
//url: localhost/user/987654
Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

//url: localhost/posts/30/comments/50
Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
    return 'Post '.$postId. 'Comments '.$commentId;
});

//Define a route with a name in route/web.php
Route::get('/food/traditional', function () {
    echo "This is traditional food";
    })->name('profile');

//reroute
//url: localhost/profile1 (url automatically changed to food/traditional)
Route::get('profile1', function () {
    return redirect() -> route('profile');
});
*/
