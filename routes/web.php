<?php

use App\Http\Controllers\C_Todo;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [C_Todo::class, 'index']);
Route::get('/home/add', [C_Todo::class, 'create']);
Route::post('/home', [C_Todo::class, 'store']);

Route::get('/home/edit/{td_id}', [C_Todo::class, 'edit']);

Route::post('home/edit/{td_id}', [C_Todo::class, 'update']);

// Route::put('/home/{td_id}', [C_Todo::class, 'edit']);
Route::get('/home/delete/{td_id}', [C_Todo::class, 'destroy']);
