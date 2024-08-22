<?php

use Illuminate\Support\Facades\Route;


// route portfolio
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


// route admin
Route::get('/admin', function (){
    return view('admin.index');
});