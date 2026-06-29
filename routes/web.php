<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('student/{id}', function ($id) {
    return view("Student",['id'=>$id]);
    
})->name('student.profile');
Route::fallback(function () {
    return "<h1>404 ไม่พบหน้าเว็บ</h1>";
}); 