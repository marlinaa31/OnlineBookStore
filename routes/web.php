<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/agama', function () {
    return view('agama');
})->name('agama');

Route::get('/detailbukuagama1', function () {
    return view('detailbukuagama1');
})->name('detailbukuagama1');

Route::get('/detailbukuagama2', function () {
    return view('detailbukuagama2');
})->name('detailbukuagama2');

Route::get('/detailbukuagama3', function () {
    return view('detailbukuagama3');
})->name('detailbukuagama3');

Route::get('/sains', function () {
    return view('sains');
})->name('sains');

Route::get('/detailbukusains1', function () {
    return view('detailbukusains1');
})->name('detailbukusains1');

Route::get('/detailbukusains2', function () {
    return view('detailbukusains2');
})->name('detailbukusains2');

Route::get('/detailbukusains3', function () {
    return view('detailbukusains3');
})->name('detailbukusains3');

Route::get('/bisnis_ekonomi', function () {
    return view('bisnis&ekonomi');
})->name('bisnis_ekonomi');

Route::get('/detailbukubisnisekonomi1', function () {
    return view('detailbukubisnis&ekonomi1');
})->name('detailbukubisnisekonomi1');

Route::get('/detailbukubisnisekonomi2', function () {
    return view('detailbukubisnis&ekonomi2');
})->name('detailbukubisnisekonomi2');

Route::get('/detailbukubisnisekonomi3', function () {
    return view('detailbukubisnis&ekonomi3');
})->name('detailbukubisnisekonomi3');

Route::get('/komik', function () {
    return view('komik');
})->name('komik');

Route::get('/detailkomik1', function () {
    return view('detailkomik1');
})->name('detailkomik1');

Route::get('/detailkomik2', function () {
    return view('detailkomik2');
})->name('detailkomik2');

Route::get('/detailkomik3', function () {
    return view('detailkomik3');
})->name('detailkomik3');

Route::get('/komputer_teknologi', function () {
    return view('komputer&teknologi');
})->name('komputer_teknologi');

Route::get('/detailkomputer_teknologi1', function () {
    return view('detailkomputer&teknologi1');
})->name('detailkomputer_teknologi1');

Route::get('/detailkomputer_teknologi2', function () {
    return view('detailkomputer&teknologi2');
})->name('detailkomputer_teknologi2');

Route::get('/detailkomputer_teknologi3', function () {
    return view('detailkomputer&teknologi3');
})->name('detailkomputer_teknologi3');

Route::get('/pengembangan_diri', function () {
    return view('pengembangandiri');
})->name('pengembangan_diri');

Route::get('/detailpengembangan_diri1', function () {
    return view('detailpengembangandiri1');
})->name('detailpengembangan_diri1');

Route::get('/detailpengembangan_diri2', function () {
    return view('detailpengembangandiri2');
})->name('detailpengembangan_diri2');

Route::get('/detailpengembangan_diri3', function () {
    return view('detailpengembangandiri3');
})->name('detailpengembangan_diri3');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/viewcart', function () {
    return view('viewcart');
})->name('viewcart');

Route::get('/shippingdetails', function () {
    return view('shippingdetails');
})->name('shippingdetails');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/books', function () {
    return view('books');
})->name('books');

Route::get('/addbooks', function () {
    return view('addbooks');
})->name('addbooks');

Route::get('/contact_admin', function () {
    return view('contactAdmin');
})->name('contact_admin');

require __DIR__.'/auth.php';
