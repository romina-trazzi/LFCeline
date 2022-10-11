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
    return view('pages.welcome');
});

Route::get('home.php', function () {
    return view('pages.home');
});

Route::get('aboutCeline.php', function () {
    return view('pages.aboutCeline');
});

Route::get('bookstore.php', function () {
    return view('pages.bookstore');
});

Route::get('contacts.php', function () {
    return view('pages.contacts');
});

