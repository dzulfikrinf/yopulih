<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VideoArticleController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ConsultationController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/video-article', [VideoArticleController::class, 'index'])->name('video-article');
Route::get('/forum', [ForumController::class, 'index'])->name('forum');
Route::get('/consultation', [ConsultationController::class, 'index'])->name('consultation');

Route::get('/', function () {
    return view('welcome');
});
