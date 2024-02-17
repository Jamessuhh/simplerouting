<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutme_controller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutme', function () {
    return view('aboutme');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/hobbies', function () {
    return view('hobbies');
});

route::get('/aboutme', [aboutme_controller::class, 'show']);
route::get('/skills', [skills_controller::class, 'show']);
route::get('/hobbies', [hobbies_controller::class, 'show']);