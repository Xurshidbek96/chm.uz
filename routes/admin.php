<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" and "admin" middleware groups.
|
*/

// Admin Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

// Categories Management
Route::resource('categories', CategoryController::class)->names([
    'index' => 'admin.categories.index',
    'create' => 'admin.categories.create',
    'store' => 'admin.categories.store',
    'show' => 'admin.categories.show',
    'edit' => 'admin.categories.edit',
    'update' => 'admin.categories.update',
    'destroy' => 'admin.categories.destroy',
]);
Route::patch('categories/{category}/toggle-status', [CategoryController::class, 'toggleStatus'])
    ->name('admin.categories.toggle-status');

// Products Management
Route::resource('products', ProductController::class)->names([
    'index' => 'admin.products.index',
    'create' => 'admin.products.create',
    'store' => 'admin.products.store',
    'show' => 'admin.products.show',
    'edit' => 'admin.products.edit',
    'update' => 'admin.products.update',
    'destroy' => 'admin.products.destroy',
]);
Route::patch('products/{product}/toggle-status', [ProductController::class, 'toggleStatus'])
    ->name('admin.products.toggle-status');
Route::post('products/{product}/upload-image', [ProductController::class, 'uploadImage'])
    ->name('admin.products.upload-image');

// Orders Management
Route::resource('orders', OrderController::class)->except(['create', 'store'])->names([
    'index' => 'admin.orders.index',
    'show' => 'admin.orders.show',
    'edit' => 'admin.orders.edit',
    'update' => 'admin.orders.update',
    'destroy' => 'admin.orders.destroy',
]);
Route::patch('orders/{order}/status', [OrderController::class, 'updateStatus'])
    ->name('admin.orders.update-status');

// Messages Management
Route::resource('messages', MessageController::class)->names([
    'index' => 'admin.messages.index',
    'create' => 'admin.messages.create',
    'store' => 'admin.messages.store',
    'show' => 'admin.messages.show',
    'edit' => 'admin.messages.edit',
    'update' => 'admin.messages.update',
    'destroy' => 'admin.messages.destroy',
]);
Route::patch('messages/{message}/mark-read', [MessageController::class, 'markAsRead'])
    ->name('admin.messages.mark-read');
Route::post('messages/{message}/reply', [MessageController::class, 'reply'])
    ->name('admin.messages.reply');

// Users Management
Route::resource('users', UserController::class)->names([
    'index' => 'admin.users.index',
    'create' => 'admin.users.create',
    'store' => 'admin.users.store',
    'show' => 'admin.users.show',
    'edit' => 'admin.users.edit',
    'update' => 'admin.users.update',
    'destroy' => 'admin.users.destroy',
]);
Route::patch('users/{user}/toggle-role', [UserController::class, 'toggleRole'])
    ->name('admin.users.toggle-role');