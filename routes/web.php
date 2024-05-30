<?php

use App\Models\Todo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class,'index']);
Route::get('/delete/{todo}', [TodoController::class,'delete'])->name('delete');
Route::get('/edit/{todo}', [TodoController::class,'edit'])->name('edit');
Route::post('/post', [TodoController::class,'post'])->name('post');
