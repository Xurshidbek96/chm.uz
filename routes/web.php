<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Auth\Middleware\Authenticate;

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

Route::get('/route_cache', [PagesController::class, 'clearRoute']);

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/category/{id}', [PagesController::class, 'category']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/news', [PagesController::class, 'news']);
Route::get('/new/{id}', [PagesController::class, 'new']);
Route::get('/single/{id}', [PagesController::class, 'single']);
Route::get('/video', [PagesController::class, 'videos']);

Route::post('/send_order', [PagesController::class, 'send_order'])->name('send_order');
Route::post('/send_sms', [PagesController::class, 'send_sms'])->name('send_sms');

Route::get('/search/', [PagesController::class, 'search'])->name('search');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/a-panel', function () {
        return view('admin.layouts.home');
    });

    Route::resource('products', ProductController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('partners', PartnerController::class);
    Route::resource('shops', ShopController::class);
    Route::resource('banners', BannerController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('abouts', AboutController::class);
    Route::resource('sms', SmsController::class);
    Route::resource('orders', OrderController::class);

});
