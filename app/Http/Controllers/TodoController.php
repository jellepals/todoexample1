<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() 
    {
        return view('welcome',['todos' => Todo::all(), 'title' => 'test']);
    }

    public function delete(Todo $todo) 
    {
        $todo->delete();
        return redirect('/');
    }

    public function post(Todo $todo) 
    {
        Todo::create(['todo' => request('todo')]);
        return redirect('/');
    }

    public function edit(Todo $todo)
    {
        return view('edit',['todo' => $todo]);
    }
}
