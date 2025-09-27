<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\MessageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public API Routes
Route::prefix('v1')->group(function () {
    
    // Categories
    Route::get('categories', [CategoryController::class, 'index']);
    Route::get('categories/{category:slug}', [CategoryController::class, 'show']);
    Route::get('categories/{category}/products', [CategoryController::class, 'products']);

    // Products
    Route::get('products', [ProductController::class, 'index']);
    Route::get('products/featured', [ProductController::class, 'featured']);
    Route::get('products/search', [ProductController::class, 'search']);
    Route::get('products/{product:slug}', [ProductController::class, 'show']);
    Route::post('products/{product}/increment-views', [ProductController::class, 'incrementViews']);

    // Orders (Public - for creating orders)
    Route::post('orders', [OrderController::class, 'store']);

    // Messages (Public - for contact form)
    Route::post('messages', [MessageController::class, 'store']);
});

// Protected API Routes
Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    
    // User Orders
    Route::get('my-orders', [OrderController::class, 'userOrders']);
    Route::get('orders/{order}', [OrderController::class, 'show']);
    Route::patch('orders/{order}/cancel', [OrderController::class, 'cancel']);

    // User Messages
    Route::get('my-messages', [MessageController::class, 'userMessages']);
    
});
