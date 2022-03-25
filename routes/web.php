<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

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
    return view('auth.login');
});

/* Route::get('/tarea', function () {
    return view('tarea.index');
});
Route::get('/tarea/create',[TareaController::class, 'create']); */

Route::resource('tarea', TareaController::class)->middleware('auth');
Auth::routes(['reset'=>false]);

Route::get('/home', [TareaController::class, 'index'])->name('home');

Route::prefix(['middleware' => 'auth'], function () {
    
    Route::get('/', [TareaController::class, 'index'])->name('home');
    
});
