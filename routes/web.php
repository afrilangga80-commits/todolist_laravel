<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/todo', [TodoListController::class,
'index']);