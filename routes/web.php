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

Route::get('/', [PastesController::class, 'index']);

Route::post('/addPaste', [PastesController::class, 'getData']);

Route::get('/paste{id}', [PastesController::class, 'showPaste']);

Route::get('/delete/paste{id}', [PastesController::class, 'deletePaste']);

Route::get('/update/paste{id}', [PastesController::class, 'updatePaste']);

// use it to see all data from pastes table
Route::get('/showData', function() {
    $data = DB::select('select * from pastes');
    dd($data);
});
