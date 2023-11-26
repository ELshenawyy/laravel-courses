<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
 /*
    Route URL => Controller (Functionality) => Model => DB
                                        => View => UI (blade template engine)
    
    Routes => routes/web.php
    Views => [resource/views]
    Controllers => [app/http/controllers]
    Models => [app/Models]
 */

Route::view('/' , 'pages.home')->name('home');
Route::get('/events' , [EventController::class , 'index'])->name('events');
Route::view('/create' , 'pages.create')->name('create');
Route::post('/store' , [EventController::class , 'store'])->name('store');
Route::get('/events/{id}' , [EventController::class , 'show'])->name('show');
Route::get('/events/{id}/edit' , [EventController::class , 'edit'])->name('edit');
Route::put('/events/{id}/update' , [EventController::class , 'update'])->name('update');
Route::delete('/events/{id}/delete' , [EventController::class , 'destroy'])->name('destroy');



