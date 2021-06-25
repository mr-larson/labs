<?php

use App\Http\Controllers\AdresseController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Models\Adresse;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Image;
use App\Models\Link;
use App\Models\Map;
use App\Models\Nav;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Titre;
use App\Models\User;
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
    $users = User::all();
    $titres = Titre::all();
    $link = Link::first();
    $services = Service::all();
    $video = Video::first();
    $nav = Nav::all();
    $footer = Footer::first();
    $images = Image::all(); 
    $sliders = Slider::all(); 
    $testimonials = Testimonial::all(); 
    $adresse = Adresse::first();
    $map = Map::first();
    return view('home',compact('users','nav','footer', 'link', 'titres', 'video', 'images', 'adresse', 'sliders', 'services', 'testimonials', 'map'));
})->name('home');

Route::get('/services', function () {
    $users = User::all();
    $titres = Titre::all();
    $features = Feature::all();
    $services = Service::all();
    $link = Link::first();
    $nav = Nav::all();
    $footer = Footer::first();
    $images = Image::all(); 
    $adresse = Adresse::first(); 
    return view('services',compact('users','nav','footer', 'link', 'titres', 'images', 'adresse', 'features', 'services'));
})->name('services');

Route::get('/blog', function () {
    $users = User::all();
    $images = Image::all(); 
    $titres = Titre::all();
    $link = Link::first();
    $nav = Nav::all();
    $footer = Footer::first(); 
    $adresse = Adresse::first(); 
    return view('blog',compact('users','nav','footer', 'link', 'titres', 'adresse', 'images'));
})->name('blog');

Route::get('/read', function () {
    $images = Image::all(); 
    $users = User::all();
    $nav = Nav::all();
    $titres = Titre::all();
    $footer = Footer::first();
    return view('read',compact('users','nav','footer', 'images', 'titres'));
})->name('read');

Route::get('/contact', function () {
    $images = Image::all(); 
    $users = User::all();
    $titres = Titre::all();
    $link = Link::first();
    $nav = Nav::all();
    $footer = Footer::first();
    $adresse = Adresse::first(); 
    $map = Map::first(); 
    return view('contact',compact('users','nav','footer', 'link', 'titres', 'adresse', 'images', 'map'));
})->name('contact');

Route::get('/dashboard', function () {
    $users = User::all();
    $titres = Titre::all();
    $link = Link::first();
    $video = Video::first();
    $nav = Nav::all();
    $footer = Footer::first();
    $images = Image::all(); 
    $adresse = Adresse::first();
    $sliders = Slider::all();  
    $features = Feature::all();
    $services = Service::all();
    $testimonials = Testimonial::all(); 
    $map = Map::first();
    return view('dashboard',compact('users','nav', 'footer', 'link', 'titres', 'video', 'images', 'adresse', 'sliders', 'features', 'services', 'testimonials', 'map'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//All
// User
Route::resource("/user", UserController::class)->middleware(['auth']);
// Nav
Route::resource("/nav", NavController::class)->middleware(['auth']);
// Titre
Route::resource("/titre", TitreController::class)->middleware(['auth']);
// Link
Route::resource("/link", LinkController::class)->middleware(['auth']);
// Footer
Route::resource("/footer", FooterController::class)->middleware(['auth']);
// Image
Route::resource("/image", ImageController::class)->middleware(['auth']);
// Adresse
Route::resource("/adresse", AdresseController::class)->middleware(['auth']);

//Home
// Video
Route::resource("/video", VideoController::class)->middleware(['auth']);
// Slider
Route::resource("/slider", SliderController::class)->middleware(['auth']);
// Testimonial
Route::resource("/testimonial", TestimonialController::class)->middleware(['auth']);

//Service
// Feature
Route::resource("/feature", FeatureController::class)->middleware(['auth']);
// Service
Route::resource("/service", ServiceController::class)->middleware(['auth']);

//Contact
// Map
Route::resource("/map", MapController::class)->middleware(['auth']);


//Route pour l'email (Contact.blade.php)
Route::post("/send-mail", [MailController::class, "sendMail"]);
