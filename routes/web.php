<?php

use App\Models\Post;
use App\Livewire\CreatePost;
use App\Livewire\EditPost;
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



Route::get('/', CreatePost::class)->name('create.post');
Route::get('edit-post/{id}', EditPost::class)->name('edit.post');
