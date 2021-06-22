<?php

use App\Http\Controllers\FooterController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\TitreController;
use App\Models\Footer;
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

Route::get('/', function () {
    $footer = Footer::first(); 
    return view('home');
})->name('home');

Route::get('/services', function () {

    return view('services');
})->name('services');

Route::get('/blog', function () {
    
    return view('blog');
})->name('blog');
Route::get('/read', function () {
    
    return view('read');
})->name('read');

Route::get('/contact', function () {
    
    return view('contact');
})->name('contact');

Route::get('/dashboard', function () {
    $footer = Footer::first();
    return view('dashboard');
})->middleware(['auth'])->name('dashboard', 'footer');

require __DIR__.'/auth.php';

// Titre
Route::resource("/titre", TitreController::class)->middleware(['auth']);
// Link
Route::resource("/link", LinkController::class)->middleware(['auth']);
// Footer
Route::resource("/footer", FooterController::class)->middleware(['auth']);