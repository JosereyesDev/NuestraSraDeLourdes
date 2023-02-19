<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Admin\Emaus\EmausianoController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/emausiano', [EmausianoController::class,'index']); //muestra todos los registros
Route::post('/emausiano', [EmausianoController::class,'store']); // crea un registro
Route::put('/emausiano/{id}', [EmausianoController::class,'update']); // actualiza un registro
Route::delete('/emausiano/{id}', [EmausianoController::class,'destroy']); //elimina un registro
Route::get('/emausiano/{id}', [EmausianoController::class,'edit']); // actualiza un registro