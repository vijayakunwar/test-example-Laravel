<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    //return 'About Page';
    //return [1,2,3,'mykey' => 'myvalue',4,'adf',6,"hello"=>"world"];
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});