<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\PostDisplayController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get(
    '/products',
    [PostDisplayController::class, 'list']
)
    ->name('products');

Route::get(
    '/products/{slug}',
    [PostDisplayController::class, 'show']
)->name('single-product');

Route::get('/distributor', function () {
    return view('frontend.distributor');
})->name('distributor');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::post('/contact', [ContactFormController::class, 'store'])
    ->name('contact.submit');

