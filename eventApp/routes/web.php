<?php

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
use App\Http\Controllers\EventController;


Route::get('/', function (){
    return view('welcome');
});
Route::get('/eventos', [EventController::class ,'index']);
Route::get('/eventos/criar', [EventController::class ,'create']);
Route::post('/eventos', [EventController::class ,'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
