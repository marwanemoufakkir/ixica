<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Home variations
Route::get('/home-2', function () {
    return view('home2');
})->name('home2');

Route::get('/home-3', function () {
    return view('home3');
})->name('home3');

Route::get('/home-4', function () {
    return view('home4');
})->name('home4');

// Pages
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/package', function () {
    return view('package');
})->name('package');

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

// Services
Route::get('/services', function () {
    return view('services.list');
})->name('services.list');

Route::get('/services-details', function () {
    return view('services.details');
})->name('services.details');

// Movies
Route::get('/movies-list', function () {
    return view('movies.list');
})->name('movies.list');

Route::get('/movies-details', function () {
    return view('movies.details');
})->name('movies.details');

// Team
Route::get('/team-member', function () {
    return view('team.member');
})->name('team.member');

Route::get('/team-details', function () {
    return view('team.details');
})->name('team.details');

// Shop
Route::get('/shop-page', function () {
    return view('shop.page');
})->name('shop.page');

Route::get('/shop-details', function () {
    return view('shop.details');
})->name('shop.details');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

// Blog
Route::get('/blog', function () {
    return view('blog.list');
})->name('blog.list');

Route::get('/blog-details', function () {
    return view('blog.details');
})->name('blog.details');

// Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
