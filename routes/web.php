<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});



// Guest routes
Route::prefix('product')->group(function () {
    Route::get('/login', function () {
        return view('product.login.submit');
    })->name('product.login.submit');

    // Add the necessary login and authentication routes
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('product.login.submit');
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('product.logout');
    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('product.register');
    Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('product.register.submit');
});

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
});

// Logout route
Route::post('/product/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('product.logout');


// Default Laravel authentication routes
Auth::routes();

// Remove the default home route if not needed
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
