<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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


// route CRUD admin
Route::get('/admin',[ArticleController::class, 'tampil'])->name('tampil_article');
Route::post('/article',[ArticleController::class, 'simpan'])->name('simpan_article');
Route::get('/hapus/{id}',[ArticleController::class, 'hapus'])->name ('hapus_article');
