<?php

use App\Models\Projects;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $projects = Projects::all();
    
    return view('index', ['projects' => $projects]);
})->name('index');

Route::get('/project/list', function () {
    $projects = Projects::all();
    
    return view('project-list', ['projects' => $projects]);
})->name('project-list');

Route::get('/experience', function () {

    return view('experience');
})->name('experience');

Route::get('/skills', function () {

    return view('skills');
})->name('skills');

Route::get('/certificates', function () {

    return view('certificates');
})->name('certificates');
