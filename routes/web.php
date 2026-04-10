<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//user
Route::get('/about', function () {
    return view('user/about');
})->name('about');

Route::get('/profile', function () {
    return view('user/profile');
})->name('profile');

Route::get('/ngopi', function () {
    return view('user/ngopi');
})->name('ngopi');

Route::get('/sumbit', function () {
    return view('user/submit');
})->name('submit');

//admin
Route::get('/admin', function () {
    return view('admin/admin');
})->name('admin');

Route::get('/collab', function () {
    return view('admin/collabadmin');
})->name('collab');


//login-register
Route::get('/login', function () {
    return view('user-log/login');
})->name('login');
Route::get('/register', function () {
    return view('user-log/register');
})->name('register');
