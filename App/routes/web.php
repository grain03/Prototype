<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TasksController;
use App\Models\Task;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [ProjectsController::class, 'index'])->name('home');



Route::resource('tasks', TasksController::class);

Route::resource('projects', ProjectsController::class);
Route::get('projects/tasks/{projectId}', [TasksController::class, 'index'])->name('projects.tasks');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
