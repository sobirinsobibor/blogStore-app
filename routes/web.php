<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// use App\Models\Post;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return "Halaman Home";
// });

// Route::get('/about', function(){
//     return "Halaman About";
// });

// Route::get('/blog', function(){
//     return "Halaman Blog";
// });

// route tidak kirim data
// Route::get('/', function(){
//     return view("home");
// });

// Route::get('/about', function(){
//     return view('about');
// });

// Route::get('/blog', function(){
//     return view('posts');
// });

// Routes yang kirim data, data biasa dikirimkan dengan array asosiative
// routing menggunakan clossures
Route::get("/", function(){
    return view("home", [
        "title" => "Home"
    ]);
});

Route::get("/about", function(){
    return view("about", [
        "title" => "About",
        "name" => "Imam Wahyu Sobirin",
        "email" => "wsobirin2@gmail.com",
        "image" => "ME.jpeg"
    ]);
});

// routing menggunakan controller

Route::get("/blog", [PostController::class, 'index']);

Route::get("/posts/{post:slug}", [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get("/login", [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'] );

Route::get("/register", [RegisterController::class, 'index'])->middleware('guest');
Route::post("/register", [RegisterController::class, 'store']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth'); 

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

// Route::get('categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         "title" => "Post By Category : $category->name",
//         "posts" => $category->posts->load('category', 'user'),
//     ]);
// });

// Route::get('/author/{user:username}', function(User $user){
//     return view('posts', [
//         "title" => "Post By Author : $user->name",
//         "posts" => $user->posts->load('category', 'user'),
//     ]);
// });

// backend routes
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');


