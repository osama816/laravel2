<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PageController::class,'home']);
Route::get('/about-us',[PageController::class,'about']);
Route::get('/post',[PageController::class,'post']);
Route::get('/Contact',[PageController::class,'Contact']);

