<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/login', [\App\Http\Controllers\MainController::class, 'showForm'])->name('form.show');
Route::post('/login', [\App\Http\Controllers\MainController::class, 'submitForm'])->name('login.submit');
Route::get('/logout', [\App\Http\Controllers\MainController::class, 'logout'])->name('logout.now');

Route::get('/projects', [\App\Http\Controllers\MainController::class, 'showProjects'])->name('projects.show');
Route::post('/select-project', [\App\Http\Controllers\MainController::class, 'selectProject'])->name('project.select');
Route::get('/projects/{projectName}/{projectStatus}', [\App\Http\Controllers\MainController::class, 'showProjectDetails'])->name('projects.details');

