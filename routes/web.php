<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PastesController;

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

Route::get('/', [PastesController::class, 'homePage']);

Route::post('/addPaste', [PastesController::class, 'addPaste']);

Route::get('/paste{id}', [PastesController::class, 'showPaste']);

Route::get('/update/paste{id}', [PastesController::class, 'updatePaste']);

Route::get('/delete/paste{id}', [PastesController::class, 'deletePaste']);
