<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilesController;
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

Route::get('/', [FilesController::class, 'showLoadPage'])->name('main');
Route::post('/save_file', [FilesController::class, 'saveFile']);
Route::get('/table', [FilesController::class, 'showData'])->name('table');
Route::get('/delete', [FilesController::class, 'clearTable'])->name('delete');