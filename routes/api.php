<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

Route::apiResource('projects', ProjectController::class);
Route::apiResource('tasks', TaskController::class);
