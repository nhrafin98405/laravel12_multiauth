<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ProductAuthController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;




Route::get('product/login', [ProductAuthController::class, 'showLoginForm'])
    ->name('product.login.form');

Route::post('product/login', [ProductAuthController::class, 'login'])
    ->name('product.login');

Route::post('product/logout', [ProductAuthController::class, 'logout'])
    ->name('product.logout');


Route::get('product/dashboard', function () {
    return view('product.dashboard');
})->middleware('auth:product')->name('product.dashboard');


Route::prefix('product')->middleware('auth:product')->group(function(){

    Route::resource('product',ProductController::class);

});


Route::get('student/login',[StudentsController::class,'showLoginForm'])->name('student.login.form');
Route::post('student/login', [StudentsController::class, 'login'])->name('student.login');
Route::post('student/logout', [StudentsController::class, 'logout'])->name('student.logout');


Route::get('student/dashboard', function () {
    return view('student.dashboard');
})->middleware('auth:student')->name('student.dashboard');




// Admin Routes
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');


Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin','verified']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
