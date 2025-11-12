<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;



use App\Http\Controllers\Admin\BlogController as AdminBlogController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard'); 

    Route::resource('blogs', AdminBlogController::class);
});


Route::get('/', [HomeController::class, 'index'])->name('home');


//Route::get('/contact', [HomeController::class, 'show'])->name('contact');


//Route::post('/contact', [HomeController::class, 'submit'])->name('contact');


Route::get('/contact', [HomeController::class, 'index'])->name('contact');
Route::post('/contact', [HomeController::class, 'submit'])->name('contact.submit');


//blog routes
Route::get('/', function () {
    return redirect()->route('blogs.index');
});

Route::resource('blogs', BlogController::class);


