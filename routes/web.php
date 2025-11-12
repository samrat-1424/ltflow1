<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;



Route::get('/', [HomeController::class, 'index'])->name('home');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.submit');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::resource('blogs', AdminBlogController::class);
    });
});

Route::resource('blogs', BlogController::class)->only(['index', 'show']);

//Route::get('/contact', [HomeController::class, 'show'])->name('contact');


//Route::post('/contact', [HomeController::class, 'submit'])->name('contact');


Route::get('/contact', [HomeController::class, 'index'])->name('contact');
Route::post('/contact', [HomeController::class, 'submit'])->name('contact.submit');






