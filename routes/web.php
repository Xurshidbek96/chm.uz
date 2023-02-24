<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController ;
use App\Http\Controllers\Admin\CategoryController ;
use App\Http\Controllers\Admin\ProductController ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'index']);
Route::get('/category/{id}', [PagesController::class, 'category'])->name('category');
Route::get('/single', [PagesController::class, 'single'])->name('single');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/search', [PagesController::class, 'search'])->name('search');


// Admin routes

Route::prefix('admin/')->group(function(){

    Route::get('home', function(){
        return view('admin.layouts.dashboard');
    })->name('admin.home');

    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::post('product-image-upload', [ProductController::class, 'upload'])->name('admin.upload');

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
