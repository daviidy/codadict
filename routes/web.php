<?php

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
    return view('home');
});

Route::get('/codact', function () {
    return view('codact');
});

Route::get('/users/default', function () {
    return view('/users/user_default/index');
});

Route::get('/users/myproject', function () {
    return view('/users/user_default/myProject');
});

Route::get('/users/createproject', function () {
    return view('/users/user_default/creat_project');
});

Route::get('/users/editproject', function () {
    return view('/users/user_default/edit_project');
});

Route::get('/users/setting', function () {
    return view('/users/user_default/setting_user');
});
