<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

// Public routes

// Route::get('/student', [StudentController::class, 'index']);
// Route::get('/student/{id}', [StudentController::class, 'show']);
// Route::post('/student', [StudentController::class, 'store']);
// Route::put('/student/{id}', [StudentController::class, 'update']);
// Route::delete('/student/{id}', [StudentController::class, 'destroy']);
// Route::get('/student/search/{city}', [StudentController::class, 'search']);

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

// Protected Routes

// Route::middleware(['auth:sanctum'])->group(function () {

//     Route::get('/student', [StudentController::class, 'index']);
//     Route::get('/student/{id}', [StudentController::class, 'show']);
//     Route::post('/student', [StudentController::class, 'store']);
//     Route::put('/student/{id}', [StudentController::class, 'update']);
//     Route::delete('/student/{id}', [StudentController::class, 'destroy']);
//     Route::get('/student/search/{city}', [StudentController::class, 'search']);
//     Route::post('/logout', [UserController::class, 'logout']);

// });

// Partially Protected

// public
Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/{id}', [StudentController::class, 'show']);
Route::get('/student/search/{city}', [StudentController::class, 'search']);

// protected
Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('/student', [StudentController::class, 'store']);
    Route::put('/student/{id}', [StudentController::class, 'update']);
    Route::delete('/student/{id}', [StudentController::class, 'destroy']);
    Route::post('/logout', [UserController::class, 'logout']);

});