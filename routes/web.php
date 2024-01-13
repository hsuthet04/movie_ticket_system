<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
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
Route::get('/user/register', [UserController::class, 'create']);

Route::post('/user/register', [UserController::class, 'store']);

//login form
Route::get('/user/login', [UserController::class, 'login']);

Route::post('/user/authenticate', [UserController::class, 'authenticate']);

//logout form
Route::post('/user/logout', [UserController::class, 'logout']);

//detail
Route::get('/movie/movie_detail', [MovieController::class, 'detail']);

//list
Route::get('/movie/movie_list', [MovieController::class, 'list']);

//seat_plan
Route::get('/booking/{id}/{theatre_id}/seat_plan', [BookingController::class, 'seat_plan']);

//movie checkout
Route::get('/booking/{id}/movie_checkout', [BookingController::class, 'checkout']);

//ticket_plan
Route::get('/booking/{movie_id}/ticket_plan', [BookingController::class, 'ticket_plan']);

//admin
Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/home', [AdminController::class, 'home']);

    Route::get('/movie/create', [MovieController::class, 'create']);

    Route::post('/movie/create', [MovieController::class, 'store']);

    Route::get('/movie/showMovie', [MovieController::class, 'showMovie']);

    Route::get('/movie/{id}/edit', [MovieController::class, 'edit']);

    Route::put('/movie/{id}/edit', [MovieController::class, 'update']);

    Route::delete('/movie/{id}/destroy', [MovieController::class, 'destroy']);
});
