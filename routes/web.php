<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/servicios', 'pages.services')->name('services');
Route::view('/trabajos', 'pages.work')->name('work');
Route::view('/sobre-mi', 'pages.about')->name('about');
Route::view('/contacto', 'pages.contact')->name('contact');
