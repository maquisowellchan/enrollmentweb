<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/signup', function () {
    return view('signup');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/adduser', function () {
    return view('adduser');
});

Route::get('/successadduser', function () {
    return view('successadduser');
});

Route::get('/delete', function () {
    return view('delete');
});

Route::get('/updateuser', function () {
    return view('updateuser');
});

Route::get('/update', function () {
    return view('update');
});
Route::put('/successupdateuser', function () {
    return view('successupdateuser');
});