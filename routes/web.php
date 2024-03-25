<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [CommentsController::class, 'commentPost']);