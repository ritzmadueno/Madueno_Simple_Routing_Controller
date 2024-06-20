<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-me', [AboutMeController::class, 'show']);
Route::get('/skills', [SkillsController::class, 'show']);
Route::get('/hobbies', [HobbiesController::class, 'show']);
