<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\controllers\EmployeeController;



Route::get('/employees' , [App\Http\controllers\EmployeeController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
