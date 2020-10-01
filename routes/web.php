<?php

use App\Http\Controllers\TestUsersController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
