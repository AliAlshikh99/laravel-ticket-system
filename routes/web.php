<?php


use App\Http\Controllers\TicketController;
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
    return view('welcome');
});




Route::resource('Tickets', TicketController::class);
Route::controller(TicketController::class)->group(function(){

    Route::get('/archives','archive')->name('Tickets.archive');
    Route::get('/Tickets/{id}/restore/','restore')->name('Tickets.restore');
    Route::delete('/Tickets//{id}forcedelt','forcedelt')->name('Tickets.forcedelt');
});
