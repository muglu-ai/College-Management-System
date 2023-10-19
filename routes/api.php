<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PRN_API;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/student/{prn}', [PRN_API::class, 'getStudentData'])->name('student.api');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
