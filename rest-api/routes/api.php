<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

# method get
Route::get('/animals', [AnimalController::class, 'index']);

# method post
Route::post('/animals', [AnimalController::class, 'store']);

# method put
Route::put('/animals/{id}', [AnimalController::class, 'update']);

# method delete
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);

# get all resorce student
# method get
Route::get('/students' , [StudentController::class, 'index']);

# menambahkan resource student
# method post
Route::post('/students', [StudentController::class, 'store']);

# method put
Route::put('/mahasiswas/{id}', [MahasiswaController::class, 'update']);

# method delete
Route::delete('/mahasiswas/{id}', [MahasiswaController::class, 'delete']);