<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentsController;


Route::get('/', [CommentsController::class, 'commentPost']);