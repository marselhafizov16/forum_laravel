<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\CommentController;


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
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/rules', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('rules');

Route::get('/category/{category}', [ChapterController::class, 'category'])->name('category');

Route::get('/createtopic', [TopicController::class, 'createtopic'])->name('createtopic');

Route::get('/storetopic', [TopicController::class, 'storetopic'])->name('storetopic');

Route::get('/whatchtopic', [TopicController::class, 'whatchtopic'])->name('whatchtopic');

Route::get('/thistopic/{id}', [TopicController::class, 'thistopic'])->name('thistopic');

Route::get('/commentcreate', [CommentController::class, 'commentcreate'])->name('commentcreate');

Route::get('/mytopics', [TopicController::class, 'mytopics'])->name('mytopics');

Route::get('/mytopics/edit/{id}', [TopicController::class, 'edit'])->name('edit');
Route::get('/mytopics/editstore/{id}', [TopicController::class, 'editstore'])->name('editstore');

Route::get('/profileview/{user_id}', [ProfileController::class, 'profileview'])->name('profileview');


