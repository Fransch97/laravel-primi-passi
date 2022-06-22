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
        'nav' => [ 'home'=>'home', 'about'=>'about laravel', 'contact'=>'contact'],
        "title" => "Hello Laravel"
    ];
    return view('home', $dataHome);
})->name('home');

Route::get('/about', function () {
    $dataAbout = [
        'nav' => [ 'home'=>'home', 'about'=>'about laravel', 'contact'=>'contact'],
        "title" => "About laravel"
    ];
    return view('about', $dataAbout);
})->name('about');

Route::get('/contact', function () {
    $dataContact = [
        'nav' => [ 'home'=>'home', 'about'=>'about laravel', 'contact'=>'contact'],
        "title" => "Contact"
    ];
    return view('contact', $dataContact);
})->name('contact');

