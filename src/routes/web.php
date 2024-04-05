<?php

use Illuminate\Support\Facades\Route;
use Damann8479\Address\Http\Controllers\UserController;



Route::resource('users', UserController::class);