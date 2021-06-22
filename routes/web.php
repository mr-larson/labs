<?php

use App\Http\Controllers\FooterController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\VideoController;
use App\Models\Footer;
use App\Models\Image;
use App\Models\Link;
use App\Models\Titre;
use App\Models\Video;
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
    $titres = Titre::all();
    $link = Link::first();
    $video = Video::first();
    $footer = Footer::first();
    $images = Image::all(); 
    return view('home',compact('footer', 'link', 'titres', 'video', 'images'));
})->name('home');

Route::get('/services', function () {
    $titres = Titre::all();
    $link = Link::first();
    $footer = Footer::first();
    $images = Image::all(); 
    return view('services',compact('footer', 'link', 'titres', 'images'));
})->name('services');

Route::get('/blog', function () {
    $titres = Titre::all();
    $link = Link::first();
    $footer = Footer::first(); 
    return view('blog',compact('footer', 'link', 'titres',));
})->name('blog');

Route::get('/read', function () {
    return view('read');
})->name('read');

Route::get('/contact', function () {
    $titres = Titre::all();
    $link = Link::first();
    $footer = Footer::first(); 
    return view('contact',compact('footer', 'link', 'titres'));
})->name('contact');

Route::get('/dashboard', function () {
    $titres = Titre::all();
    $link = Link::first();
    $video = Video::first();
    $footer = Footer::first();
    $images = Image::first(); 
    return view('dashboard',compact('footer', 'link', 'titres', 'video', 'images'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//Home
// Video
Route::resource("/video", VideoController::class)->middleware(['auth']);
// Titre
Route::resource("/titre", TitreController::class)->middleware(['auth']);
// Link
Route::resource("/link", LinkController::class)->middleware(['auth']);
// Footer
Route::resource("/footer", FooterController::class)->middleware(['auth']);
// Image
Route::resource("/image", ImageController::class)->middleware(['auth']);