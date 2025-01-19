<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('videos', App\Http\Controllers\VideoController::class)->only('index', 'show');

Route::resource('comments', App\Http\Controllers\CommentController::class)->only('create', 'store');

Route::resource('watches', App\Http\Controllers\Api\WatchController::class)->only('store');


Route::resource('videos', App\Http\Controllers\VideoController::class)->only('index', 'show');

Route::resource('comments', App\Http\Controllers\CommentController::class)->only('create', 'store');

Route::resource('watches', App\Http\Controllers\Api\WatchController::class)->only('store');


Route::resource('videos', App\Http\Controllers\VideoController::class)->only('index', 'show');

Route::resource('comments', App\Http\Controllers\CommentController::class)->only('create', 'store');

Route::resource('watches', App\Http\Controllers\Api\WatchController::class)->only('store');


Route::resource('videos', App\Http\Controllers\VideoController::class)->only('index', 'show');

Route::resource('comments', App\Http\Controllers\CommentController::class)->only('create', 'store');

Route::resource('watches', App\Http\Controllers\Api\WatchController::class)->only('store');


Route::resource('videos', App\Http\Controllers\VideoController::class)->only('index', 'show');

Route::resource('comments', App\Http\Controllers\CommentController::class)->only('create', 'store');

Route::resource('watches', App\Http\Controllers\Api\WatchController::class)->only('store');


Route::resource('videos', App\Http\Controllers\VideoController::class)->only('index', 'show');

Route::resource('comments', App\Http\Controllers\CommentController::class)->only('create', 'store');

Route::resource('watches', App\Http\Controllers\Api\WatchController::class)->only('store');


Route::resource('videos', App\Http\Controllers\VideoController::class)->only('index', 'show');

Route::resource('comments', App\Http\Controllers\CommentController::class)->only('create', 'store');

Route::resource('watches', App\Http\Controllers\Api\WatchController::class)->only('store');


Route::resource('videos', App\Http\Controllers\VideoController::class)->only('index', 'show');

Route::resource('comments', App\Http\Controllers\CommentController::class)->only('create', 'store');

Route::resource('watches', App\Http\Controllers\Api\WatchController::class)->only('store');


Route::resource('videos', App\Http\Controllers\VideoController::class)->only('index', 'show');

Route::resource('comments', App\Http\Controllers\CommentController::class)->only('create', 'store');

Route::resource('watches', App\Http\Controllers\Api\WatchController::class)->only('store');
