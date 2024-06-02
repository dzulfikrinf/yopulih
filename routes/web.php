<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PsikologController;
use App\Http\Controllers\ClientListController;
use App\Http\Controllers\StressTestController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ArticleController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('roles', [RoleController::class, 'index']);
Route::get('roles/{id}', [RoleController::class, 'show']);

Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);

Route::get('posts', [PostController::class, 'index']);
Route::get('posts/{id}', [PostController::class, 'show']);

Route::get('comments', [CommentController::class, 'index']);
Route::get('comments/{id}', [CommentController::class, 'show']);

Route::get('notifications', [NotificationController::class, 'index']);
Route::get('notifications/{id}', [NotificationController::class, 'show']);

Route::get('psikologs', [PsikologController::class, 'index']);
Route::get('psikologs/{id}', [PsikologController::class, 'show']);

Route::get('clients', [ClientListController::class, 'index']);
Route::get('clients/{id}', [ClientListController::class, 'show']);

Route::get('stress-tests', [StressTestController::class, 'index']);
Route::get('stress-tests/{id}', [StressTestController::class, 'show']);

Route::get('questions', [QuestionController::class, 'index']);
Route::get('questions/{id}', [QuestionController::class, 'show']);

Route::get('messages', [MessageController::class, 'index']);
Route::get('messages/{id}', [MessageController::class, 'show']);

Route::get('videos', [VideoController::class, 'index']);
Route::get('videos/{id}', [VideoController::class, 'show']);

Route::get('articles', [ArticleController::class, 'index']);
Route::get('articles/{id}', [ArticleController::class, 'show']);
