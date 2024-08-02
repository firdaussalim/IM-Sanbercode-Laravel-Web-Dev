<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;

Route::get('/',[HomeController::class, 'home']);
Route::get('/register',[HomeController::class, 'register']);
Route::post('/welcome',[AuthController::class, 'submit']);
Route::get('/data-table',[HomeController::class, 'dataTable']);
Route::get('/table',[HomeController::class, 'table']);

//CRUD function
//Create data on Cast table
//Route to form input new Cast table

Route::get('/cast/create',[CastController::class, 'create']);

//Route to save data into database

Route::post('/cast', [CastController::class, 'store']);

//Route for reading all data in cast table
Route::get('/cast', [CastController::class, 'index']);

//Route to show cast detail by cast id
Route::get('/cast/{id}',[CastController::class, 'show']);

//update data cast
Route::get('/cast/{id}/edit',[CastController::class, 'edit']);
Route::put('/cast/{id}',[CastController::class, 'update']);

//delete data cast
Route::delete('/cast/{id}',[CastController::class, 'destroy']);



