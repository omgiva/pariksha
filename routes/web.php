<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles/bootstrap', [ArticleController::class, 'indexBootstrap']);

Route::get('/articles/tailwindcss', [ArticleController::class, 'indexTailwind']);

Route::get('/articles', [ArticleController::class, 'index']);