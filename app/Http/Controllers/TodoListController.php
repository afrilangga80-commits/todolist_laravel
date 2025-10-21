<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoListController extends Controller
{
    public function index ()
    {
        $todo_lists = TodoList::all();
        return view('todo.index', [
            'todo_lists' => $todo_lists
        ]);
    }
}
