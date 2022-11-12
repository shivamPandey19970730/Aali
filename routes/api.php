<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\StudentController;

Route::get('/new', Function(){
    return "api new ";
});

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

Route::get('/shivam',[StudentController::class,'index']);
Route::get('/shivam/{$id}',[StudentController::class,'show']);
Route::post('/shivam',[StudentController::class,'store']);
