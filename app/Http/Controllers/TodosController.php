<?php

namespace App\Http\Controllers;

use \App\Todo;

use Illuminate\Http\Request;


class TodosController extends Controller
{
    public function index() 
    {
        $todos = Todo::all();
        return view('todos', compact('todos'));
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todosid', compact('todo'));
    }
}
   

//    public function show($slug) {
//        $post = Post::where()
//    }
//    public function create() {
//        return view('todo-create');
//    }
//    public function store(Request $request) {

//      Post::create{[$request-> all()]}
//    }