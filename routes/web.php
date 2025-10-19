<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::view('/', 'index');

Route::view('/meeting', 'meetings'); //  making the route for meeting
Route::view('/meeting-details', 'meeting-details'); //  now route for meeting details



route::get('/index', function () {
    return view('/index'); // alumni.blade.php
})->name('/index');

Route::prefix('alumni_admin')->group(function () {
    Route::get('/index', [AdminController::class, 'dashboard']);
    Route::get('/graduated_alumni', [AdminController::class, 'graduated']);
    Route::get('/view_edit_alumni', [AdminController::class, 'viewEdit']);
    Route::get('/add_alumni', [AdminController::class, 'addAlumni']);

    Route::get('/post_news', [AdminController::class, 'postNews']);
    Route::get('/publish_events', [AdminController::class, 'publishEvents']);

    Route::get('/view_admins', [AdminController::class, 'viewAdmins']);
    Route::get('/assign_roles', [AdminController::class, 'assignRoles']);
    Route::get('/create_roles', [AdminController::class, 'createRoles']);

    Route::get('/post_jobs', [AdminController::class, 'postJobs']);
    Route::get('/industry_posts', [AdminController::class, 'industryPosts']);

    Route::get('/track_participants', [AdminController::class, 'trackParticipants']);
    Route::get('/view_all_alumni', [AdminController::class, 'viewAllAlumni']);

    Route::get('/installation_guide', [AdminController::class, 'installationGuide']);
    Route::get('/faq', [AdminController::class, 'faq']);
    Route::get('/license', [AdminController::class, 'license']);
});


// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');


// require __DIR__.'/auth.php';

/* The code snippet you provided is a series of Git commands that are typically used to initialize a
new Git repository, add a README.md file, commit the changes, set the branch to main, add a remote
repository as the origin, and push the changes to the remote repository. */

// echo "# Alumni_management_system" >> README.md
// git init
// git add README.md
// git commit -m "first commit"
// git branch -M main
// git remote add origin https://github.com/MuhammadImranBrohi/Alumni_management_system.git
// git push -u origin main

// https://github.com/MuhammadImranBrohi/Alumni_management_system.git

// git remote add origin https://github.com/MuhammadImranBrohi/Alumni_management_system.git
// git branch -M main
// git push -u origin main
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
