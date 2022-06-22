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
    $dataHome = [
        'nav' => ['home', 'about laravel', 'contact'],
        "title" => "Hello Laravel"
    ];
    return view('home', $dataHome);
});

Route::get('/about', function () {
    $dataHome = [
        'nav' => ['home', 'about laravel', 'contact'],
        "title" => "About laravel"
    ];
    return view('home', $dataHome);
});

Route::get('/contact', function () {
    $dataHome = [
        'nav' => ['home', 'about laravel', 'contact'],
        "title" => "Contact"
    ];
    return view('home', $dataHome);
});

