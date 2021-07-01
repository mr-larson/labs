<?php

use App\Http\Controllers\AdresseController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Models\Adresse;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Image;
use App\Models\Link;
use App\Models\Map;
use App\Models\Nav;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Tag;
use App\Models\Testimonial;
use App\Models\Titre;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
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
    $users = User::paginate();
    $titres = Titre::all();
    $link = Link::first();
    $services = Service::paginate();
    $video = Video::first();
    $nav = Nav::all();
    $footer = Footer::first();
    $images = Image::all(); 
    $sliders = Slider::paginate(); 
    $articles = Article::paginate(); 
    $testimonials = Testimonial::paginate(); 
    $adresse = Adresse::first();
    $map = Map::first();
    return view('home',compact('users','nav','footer', 'link', 'titres', 'video', 'images', 'adresse', 'sliders', 'services', 'testimonials', 'map', 'articles'));
})->name('home');

Route::get('/services', function () {
    $users = User::paginate();
    $titres = Titre::all();
    $features = Feature::all();
    $services = Service::paginate(9);
    $link = Link::first();
    $nav = Nav::all();
    $footer = Footer::first();
    $images = Image::all(); 
    $adresse = Adresse::first();
    $articles = Article::paginate();  
    return view('services',compact('users','nav','footer', 'link', 'titres', 'images', 'adresse', 'features', 'services', 'articles'));
})->name('services');

Route::get('/blog', function () {
    $users = User::paginate();
    $images = Image::all(); 
    $titres = Titre::all();
    $link = Link::first();
    $nav = Nav::all();
    $footer = Footer::first(); 
    $adresse = Adresse::first();
    $articles = Article::paginate(3);
    $categories = Category::all();
    $tags = Tag::all();
    $comments = Comment::all();
    /* $categories = Categorie::all();  */
    return view('blog',compact('users','nav','footer', 'link', 'titres', 'adresse', 'images', 'articles', 'comments','tags', 'categories'));
})->name('blog');

/* Route::get('/read', function () {
    $images = Image::all(); 
    $users = User::all();
    $nav = Nav::all();
    $titres = Titre::all();
    $footer = Footer::first();
    return view('read',compact('users','nav','footer', 'images', 'titres'));
})->name('read'); */

Route::get('/contact', function () {
    $images = Image::all(); 
    $users = User::paginate();
    $titres = Titre::all();
    $link = Link::first();
    $nav = Nav::all();
    $footer = Footer::first();
    $adresse = Adresse::first(); 
    $map = Map::first(); 
    return view('contact',compact('users','nav','footer', 'link', 'titres', 'adresse', 'images', 'map'));
})->name('contact');

Route::get("/blog/search", function(Request $request){
    $articles = Article::query()->where("h2","LIKE","%{$request->search}%")->paginate(3);
    $users = User::paginate();
    $images = Image::all(); 
    $titres = Titre::all();
    $link = Link::first();
    $nav = Nav::all();
    $footer = Footer::first(); 
    $adresse = Adresse::first();
    $categories = Category::all();
    $tags = Tag::all();
    $comments = Comment::all();
    /* $categories = Categorie::all();  */
    return view('blog',compact('users','nav','footer', 'link', 'titres', 'adresse', 'images', 'articles', 'comments','tags', 'categories'));
});

Route::get('/dashboard', function () {
    $users = User::paginate();
    $titres = Titre::all();
    $link = Link::first();
    $video = Video::first();
    $nav = Nav::all();
    $footer = Footer::first();
    $images = Image::all(); 
    $adresse = Adresse::first();
    $sliders = Slider::paginate();  
    $features = Feature::all();
    $services = Service::paginate();
    $testimonials = Testimonial::paginate(); 
    $articles = Article::paginate();
    $comments = Comment::all();
    $map = Map::first();
    return view('dashboard',compact('users','nav', 'footer', 'link', 'titres', 'video', 'images', 'adresse', 'sliders', 'features', 'services', 'testimonials', 'map', 'articles', 'comments'));
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

//Blog
// Articles
Route::resource("/article", ArticleController::class);
// confirm
Route::get("/confirm", [ArticleController::class, 'confirm'])->middleware(['auth']);
// confirmed
Route::post("/confirmed/{id}", [ArticleController::class, 'confirmed'])->middleware(['auth']);
// Comment
Route::resource("/comment", CommentController::class)->middleware(['auth']);
// confirm
Route::get("/confirm", [CommentController::class, 'confirm'])->middleware(['auth']);
// confirmed
Route::post("/confirmed/{id}", [CommentController::class, 'confirmed'])->middleware(['auth']);
// Tag
Route::resource("/tag", TagController::class);
// Category
Route::resource("/category", CategoryController::class);


//Route pour l'email (Contact.blade.php)
Route::post("/send-mail", [MailController::class, "sendMail"]);
//Route pour le newsletter
Route::resource("/newsletter",NewsletterController::class);
