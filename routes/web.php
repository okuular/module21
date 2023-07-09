<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [TextController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home/create', [HomeController::class, 'create'])->name('t.create');
Route::post('/home', [HomeController::class,'store'])->name('t.store');

Route::get('/home/{t}/edit', [HomeController::class, 'edit'])->name('t.edit');
Route::patch('/home/{t}', [HomeController::class, 'update'])->name('t.update');
Route::get('/home/{t}/delete', [HomeController::class, 'delete'])->name('t.delete');
Route::delete('/home/{t}', [HomeController::class, 'destroy'])->name('t.destroy');


Route::get('/{t}', [TextController::class, 'detail'])->name('detail');
