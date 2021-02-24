<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscourController;
use App\Http\Controllers\ListeUrl;
use App\Http\Controllers\DiscourSaharaController;


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
})->name('home');;

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',[DiscourController::class,'index2'])->name('dashboard');
    Route::resource('/discour',DiscourController::class);
    Route::resource('/listeUrl',ListeUrl::class);
    Route::resource('/sahara',DiscourSaharaController::class);
});