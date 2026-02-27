<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class)->only([
    'index', 'create'
]);

Route::resource('photos', PhotoController::class)->except([
   'create', 'store', 'update', 'destroy'
]);

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/articles/{id}', [ArticleController::class, 'show']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM : 244107020107, Nama : Helmi Rizqi Ramadhan';
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId){
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id){
    return 'Halaman Artikel dengan ID '.$id;
});

Route::get('/user/{name?}', function ($name='John'){
    return 'Nama saya '.$name;
});

Route::get('/greeting', [WelcomeController::class, 'greeting']);
