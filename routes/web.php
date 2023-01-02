<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// WEB STORE
Route::get('/', 'App\Http\Controllers\HelloController@index')->name('hello');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/shopping/search', 'App\Http\Controllers\HomeController@search')->name('search');
Route::get('/shopping', 'App\Http\Controllers\ShoppingController@index')->name('shopping');
Route::get('/collection', 'App\Http\Controllers\CollectionController@index')->name('collection');
Route::get('/product/{id}', 'App\Http\Controllers\ProductController@index')->name('product');
Route::post('/product/{id}', 'App\Http\Controllers\ProductController@add')->name('product-add');
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart');
Route::delete('/cart/{id}', 'App\Http\Controllers\CartController@delete')->name('cart-delete');
Route::get('/history', 'App\Http\Controllers\HistoryController@index')->name('history');
Route::get('/checkout', 'App\Http\Controllers\CheckoutController@index')->name('checkout');
Route::post('/checkout', 'App\Http\Controllers\CheckoutController@process')->name('checkout');
Route::get('/faq', 'App\Http\Controllers\FaqController@index')->name('faq');
Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about');
Route::get('/blog', 'App\Http\Controllers\BlogController@index')->name('blog');
Route::get('/blog-details/{id}', 'App\Http\Controllers\BlogDetailsController@index')->name('blog-details');

Route::get('/hello-blog', 'App\Http\Controllers\BlogController@hello')->name('hello-blog');
Route::get('/hello-details/{id}', 'App\Http\Controllers\BlogDetailsController@hello')->name('hello-details');

Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact');
Route::get('/success', 'App\Http\Controllers\SuccessController@index')->name('success');
Route::get('/register-success', 'App\Http\Controllers\RegisterSuccessController@index')->name('register-success');
Route::resource('carts', 'App\Http\Controllers\CartController');

Route::middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('admin', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
});

// DASHBOARD
Route::get('products/{id}/gallery', 'App\Http\Controllers\Admin\ProductController@gallery')->name('products.gallery');
Route::get('transactions/{id}/set-status', 'App\Http\Controllers\Admin\TransactionController@setStatus')->name('transactions.status');
Route::resource('products', 'App\Http\Controllers\Admin\ProductController');
Route::resource('contact', 'App\Http\Controllers\ContactController');
Route::resource('products-galleries', 'App\Http\Controllers\Admin\ProductGalleryController');
Route::resource('users', 'App\Http\Controllers\Admin\UserController');
Route::resource('transactions', 'App\Http\Controllers\Admin\TransactionController');
Route::resource('comments', 'App\Http\Controllers\Admin\CommentController');
Route::resource('blogs', 'App\Http\Controllers\Admin\BlogController');

// Logout
Route::get('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'index'])->name('logout');

// Route::prefix('admin')
//     ->namespace('Admin')
//     ->middleware(['auth', 'admin'])
//     ->group(function() {
//         Route::get('/', 'App\Http\Controllers\Admin\DashboardController@index')->name('dashboard');
//     });

Auth::routes([]);
