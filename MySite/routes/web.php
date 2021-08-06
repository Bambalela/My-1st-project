<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'OpenPagesController@showHomePage');

Route::get('/about', 'OpenPagesController@showAboutPage');

Route::get('/login', 'OpenPagesController@showSignUpPage');

