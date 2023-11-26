<?php

use Illuminate\Support\Facades\Route;

Route::get("/admin" , function(){
    return "<h1>Admin Dashboard</h1>";
});