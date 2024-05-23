<?php

use App\Models\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',['todos' => Todo::all()]);
});

Route::get('/delete/{id}', function($id) {
    
});

Route::post('/post', function() {
    Todo::create(['todo' => request('todo')]);
    return redirect('/');
})->name('post');
