<?php

use App\Http\Controllers\ArticlController;
use App\Http\Controllers\PostesController;
use App\Http\Controllers\CommenteController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\form;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::post('/creatComment', [CommenteController::class, 'creatComment'])->name('creatComment');

Route::get('/', [PostesController::class,'index'])->name('index');
Route::post('/posts', [PostesController::class, 'store'])->name('store');
Route::post('/recipes', [RecipeController::class, 'store'])->name('recipes');
Route::get('/pecipesDitail/{id}', [RecipeController::class,'pecipesDitail'])->name('pecipesDitail');
Route::get('/viewComment/{id}', [CommenteController::class, 'view'])->name('view');




