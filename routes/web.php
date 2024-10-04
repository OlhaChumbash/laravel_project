<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('tasks/index', [TaskController::class, 'index'])
    ->name('tasks.index');

Route::get('tasks/create', [TaskController::class, 'create'])
    ->name('tasks.create');

Route::post('tasks/store', [TaskController::class, 'store'])
    ->name('tasks.store');

Route::put('tasks/update/{id}', [TaskController::class, 'edit'])
    ->name('tasks.update');


Route::post('tasks/delete/{id}', [TaskController::class, 'delete'])
    ->name('tasks.delete');


//Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])
//    ->name('tasks.edit');


