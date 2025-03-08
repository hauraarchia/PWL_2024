<?php

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
});

//js 2 p1
// basic route
// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/welcome', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '2341760006 - Haura Archia';
});

//route parameters
Route::get('/user/{name}', function ($name) {
    return 'Nama Saya ' .$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post ke-'.$postId." Komentar ke: ".$commentId;
});

Route::get('/articles/{id}', function ($articleId) {
    return 'Halaman Artikel dengan ID '.$articleId;
});


// optional parameters
// Route::get('/user/{name?}', function ($name = null) {
//     return 'Nama Saya ' . $name;
// });

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama Saya ' . $name;
});

//js1 p2
use App\Http\Controllers\WelcomeController;
Route::get('/hello', [WelcomeController::class, 'hello']);

//langkah 6
use App\Http\Controllers\PageController;
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

//langkah 7
use App\Http\Controllers\HomeController;
Route::get('/home', [HomeController::class, 'home']);

use App\Http\Controllers\AboutController;
Route::get('/about', [AboutController::class, 'about']);

use App\Http\Controllers\ArticleController;
Route::get('/artikel/{articleId}', [ArticleController::class, 'articles']);

//langkah 9
use App\Http\Controllers\PhotoController;
// Route::resource('photos', PhotoController::class);

//langkah 11
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
