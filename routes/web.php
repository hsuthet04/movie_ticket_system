<?php
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//home page
Route::get('/', [PostsController::class, 'home']);

//register form
Route::get('/user/register',[UserController::class,'register']);

//login form
Route::get('user/login',[UserController::class,'login']);