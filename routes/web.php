<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/todo', [TodoListController::class,
'index']);

Route::get('/todo/tambah',[TodoListController::class, 'tambah']);
Route::post('/todo/simpan',[TodoListController::class, 'simpan']);

Route::delete('/hapus/{id}',[TodoListController::class, 'hapus']);
Route::get('/form_edit/{id}',[TodoListController::class, 'edit']);
Route::put('/update/{id}',[TodoListController::class, 'update']);

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/users/create', [UserController::class, 'index'])->name('user.create');
Route::post('/users', [UserController::class, 'simpan'])->name('simpan');
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::put('/users/{id}', [UserController::class, 'simpan_perubahan']);
Route::get('/users/tambah', [UserController::class, 'tambah']); 