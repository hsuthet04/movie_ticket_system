<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routess
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
Route::get('/movie/{id}/movie_detail', [MovieController::class, 'detail']);

//list
Route::get('/movie/movie_list', [MovieController::class, 'list']);

//seat_plan
Route::get('/booking/{id}/{theatre_id}/{showtime_id}/seat_plan', [BookingController::class, 'seat_plan'])->name('seat.plan');

//ticket_plan
Route::get('/booking/{movie_id}/ticket_plan', [BookingController::class, 'ticket_plan']);

//checkout
Route::post('/booking/{id}/{theatre_id}/{showtime_id}/movie_checkout', [BookingController::class, 'checkout']);
Route::post('/booking/{id}/{theatre_id}/{showtime_id}/checkout', [BookingController::class, 'store']);

//payment
Route::post('/booking/{id}/{theatre_id}/{showtime_id}/stripe', [StripeController::class, 'stripe'])->name('stripe');
Route::get('/booking/{id}/{theatre_id}/{showtime_id}/success', [StripeController::class, 'success'])->name('success');
Route::get('cancel', [StripeController::class, 'cancel'])->name('cancel');

Route::get('/booking/{id}/{theatre_id}/{showtime_id}/payment', [StripeController::class, 'payment'])->name('payment');
//Route::post('/booking/{id}/{theatre_id}/{showtime_id}/update', [StripeController::class, 'update'])->name('update');

Route::get('/movie/movie_list_filter', [MovieController::class, 'filter'])->name('filter');

Route::get('/contact', [PostsController::class, 'contact'])->name('contact');
Route::get('/blog', [PostsController::class, 'blog'])->name('blog');


//mail send
Route::get('send-mail', [MailController::class, 'index']);

//admin 
Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/home', [AdminController::class, 'home']);

    Route::get('/movie/create', [MovieController::class, 'create']);

    Route::post('/movie/create', [MovieController::class, 'store']);

    Route::get('/movie/showMovie', [MovieController::class, 'showMovie']);

    Route::get('/movie/{id}/edit', [MovieController::class, 'edit']);

    Route::put('/movie/{id}/edit', [MovieController::class, 'update']);

    // movie soft delete,force delete
    Route::delete('/movie/{id}/destroy', [MovieController::class, 'destroy']);

    Route::get('/movie/trashmovie', [MovieController::class, 'trash']);

    Route::post('/movie/{id}/trashmovie', [MovieController::class, 'restore'])->name('movie.restore');

    Route::delete('/movie/{id}/trashmovie', [MovieController::class, 'delete'])->name('movie.delete');


    Route::get('/scheduling/theatre_list', [AdminController::class, 'theatre_list']);

    Route::get('/user/user_list', [AdminController::class, 'user_list']);

    Route::get('/booking/booking_list', [AdminController::class, 'booking']);

    Route::resource('seat', SeatController::class);
});
