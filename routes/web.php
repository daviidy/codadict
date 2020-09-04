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
    return view('akwaba');
});

Route::resource('users', 'UserController');
Route::resource('projects', 'ProjectController');
Route::resource('categories', 'CategoryController');

Route::get('/codact', function () {
    return view('codact');
});

/*LOGIN TEST*/
Route::get('/log', function () {
    return view('/login');
});
Route::get('/admin-1', function () {
    return view('/users/user_admin/index');
});
Route::get('/admin-2', function () {
    return view('/users/user_admin/users_list');
});
Route::get('/admin-3', function () {
    return view('/users/user_admin/show_project');
});
/*END LOGIN TEST*/
Route::get('/users/createproject', function () {
    return view('/users/user_default/creat_project');
});

Route::get('/users/editproject', function () {
    return view('/users/user_default/edit_project');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');
