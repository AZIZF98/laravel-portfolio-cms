<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/blog', function (){
    return view('pages.blog');

});

Route::get('/portofolio', function () {
    return view('pages.portofolio');
});

Route::get('/contact', function (){
    return view('pages.contact');
});