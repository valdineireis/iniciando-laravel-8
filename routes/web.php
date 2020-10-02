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

Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::get('tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::delete('tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
