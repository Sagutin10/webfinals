<?php

use App\Http\Controllers\UseerController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// user
Route::middleware('auth', 'user')->group(function () {

    Route::get('dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('favorite', [FavoriteController::class, 'index'])->name('favorite');     
    Route::post('save', [ReservationController::class, 'save'])->name('save');
    Route::get('reservation', [ReservationController::class, 'index'])->name('reservation');
    Route::post('reservation', [ReservationController::class, 'save'])->name('add_reservation');
    Route::get('cart', [CartController::class, 'index'])->name('cart');
   
   
    
});

Route::middleware('auth', 'admin')->group(function () {

        Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
        Route::get('admin/main', [MainController::class, 'index'])->name('admin.main');
        Route::get('admin/home', [ProductController::class, 'index'])->name('admin.home');
        Route::get('admin/user', [UseerController::class, 'index'])->name('admin.user');
        Route::get('admin/add', [AddController::class, 'index'])->name('admin.add');
        Route::get('admin/update/{id}', [HomeController::class, 'edit'])->name('admin.update');
        Route::put('admin/update/{id}', [HomeController::class, 'update'])->name('products.update');
        Route::delete('admin/products/{product}', [HomeController::class, 'destroy'])->name('admin.products.destroy');
        Route::delete('admin/users/{user}', [UseerController::class, 'destroy'])->name('admin.users.destroy');

       
        
});



require __DIR__.'/auth.php';

// Route::get('admin/dashboard', [HomeController::class, 'index']);
// Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);
