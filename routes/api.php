<?php

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignController;

Route::post('/assign', [AssignController::class, 'assign']);
Route::get('/siswa', [AssignController::class, 'siswa']);
