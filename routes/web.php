<?php

use App\Http\Controllers\ArchivosController;
use App\Http\Controllers\uploadController;
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

Route::get('/upload', [uploadController::class, 'upload'])->name(name: 'upload');
Route::post('/upload', [uploadController::class, 'uploadPost'])->name(name: 'upload.post');