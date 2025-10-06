<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'index');

//  making the route for meeting
Route::view('/meeting', 'meetings');

//  now route for meeting details
Route::view('/meeting-details', 'meeting-details');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

// alumni-admin dashboard routing  here
Route::get('/admin-index', function () {
    return view('alumni-admin.admin-index'); // index.blade.php
})->name('admin-index');

// route for dashboard
Route::get('/admin-dashboard', function () {
    return view('alumni-admin.admin-dashboard'); // index.blade.php
})->name('admin-dashboard');

Route::get('/post-news', function () {
    return view('alumni-admin.post-news'); // index.blade.php
})->name('post-news');
Route::get('/post-events', function () {
    return view('alumni-admin.post-events'); // index.blade.php
})->name('post-events');

Route::get('/tables-data', function () {
    return view('alumni-admin.tables-data');   // view/edit alumni
})->name('tables-data');

Route::get('/form-adv', function () {
    return view('alumni-admin.form-adv');     // add alumni
})->name('form-adv');

Route::get('/post-news', function () {
    return view('alumni-admin.post-news');    // Post News
})->name('post-news');

Route::get('/post-events', function () {
    return view('alumni-admin.post-events');  // Publish Events
})->name('post-events');

Route::get('/post-job', function () {
    return view('alumni-admin.post-job');     // Post Job/Internship
})->name('post-job');

Route::get('/alumni-industries', function () {
    return view('alumni-admin.alumni-indusries'); // Alumni-Industries
})->name('alumni-indusries');

Route::get('/all-alumni', function () {
    return view('alumni-admin.all-alumni');   // View All Alumni
})->name('all-alumni');

Route::get('/participants', function () {
    return view('alumni-admin.participants'); // Track Event Participants
})->name('participants');

// route for view-admin
Route::get('/view-admin', function () {
    return view('alumni-admin.view-admin'); // index.blade.php
})->name('view-admin');

// route for role assign
Route::get('/role-assign', function () {
    return view('alumni-admin.role-assign'); // index.blade.php
})->name('role-assign');
