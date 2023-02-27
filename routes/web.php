<?php

use Illuminate\Support\Facades\Route;

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
    return view('home2');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/details', function () {
    return view('bookDetails');
});

Route::get('/pinjam', function () {
    return view('pinjam');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin/login', function () {
    return view('admin/admLogin');
});

Route::get('/admin/dashboard', function () {
    return view('admin/admDashboard');
});

Route::get('/admin/listbook', function () {
    return view('admin/admBookList'); 
});

Route::get('/admin/userlist', function () {
    return view('admin/admUserList');
});

Route::get('/admin/confirm', function () {
    return view('admin/admConfirm');
});

Route::get('/admin/complete', function () {
    return view('admin/admcomplete');
});

Route::get('/admin/desc', function () {
    return view('admin/admDesc');  
});