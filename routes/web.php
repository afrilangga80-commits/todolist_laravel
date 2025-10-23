<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Models\TodoList;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/todo', [TodoListController::class,
'index']);

Route::get('/todo/tambah',[TodoListController::class, 'tambah']);
Route::post('/todo/simpan',[TodoListController::class, 'simpan']);

Route::delete('/hapus/{id}',[TodoListController::class, 'hapus']);
Route::get('/todo/edit/{id}',[TodoListController::class, 'edit']);
Route::put('/todo/update/{id}',[TodoListController::class, 'update']);
