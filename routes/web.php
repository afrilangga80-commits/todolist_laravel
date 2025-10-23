<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/todo', [TodoListController::class,
'index']);

Route::get('/todo/tambah',[TodoListController::class, 'tambah']);
Route::post('/todo/simpan',[TodoListController::class, 'simpan']);