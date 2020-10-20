<?php

use App\Http\Controllers\TestUsersController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function(){
//     // echo 'Hello School Of Net';
//     return 'Hello School Of Net';
// });

// Route::get('/ola/{name}/{lastname?}', function($name, $lastname = ''){
//     return "Hello {$name} {$lastname}";
// });

// Route::middleware('auth')->group(function(){

//     Route::middleware('auth')->get('auth', function(){
//         return 'rota 1';
//     });

//     Route::middleware('auth')->get('auth-2', function(){
//         return 'rota 2';
//     });

// });

// [App\Http\Controllers\TestUsersController, 'index']
Route::get('test/users', [TestUsersController::class, 'index']);
Route::get('test/user/{id}', [TestUsersController::class, 'show']);

// LISTAGEM TOTAL (INDEX)
// Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');
// CRIAÇÃO (CREATE/STORE)
// Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');
// Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');
// VIZUALIZAÇÃO ÚNICA (SHOW)
// Route::get('tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
// ATUALIZAÇÃO (EDIT/PUT/PATCH)
// Route::put('tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
// Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
// DELETE (DELETE)
// Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

Route::get('tasks/page/{page}', [TaskController::class, 'index'])->name('tasks.index.page');
Route::resource('tasks', TaskController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
