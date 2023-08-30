<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GptController;


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
    return view('home');
});

// Route::get('/chat', [TestController::class, 'index']);
// Route::get('/page-form', [TestController::class, 'form']);
// Route::post('/page-form', [TestController::class, 'index']);


Route::get('/home', [GptController::class, 'index']);
Route::get('/equipe', [GptController::class, 'equipe']);
Route::get('/exemples', [GptController::class, 'exemples']);
Route::get('/questions', [GptController::class, 'questions']);
//Produire une page spéciale de réponses par CheapGPT
Route::post('/questions', [GptController::class, 'solution']);
