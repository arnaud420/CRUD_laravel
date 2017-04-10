<?php

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

//page d'accueil
Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);

//route utilisateurs
Route::resource('users', 'UsersController');

//permet de retourner la page user commentaire en fonction de son id
Route::resource('users.commentaires', 'UserCommentairesController', array('parameters' => 'singulier'));

//route admin
Route::group(['middleware' => 'isAdmin', 'as' => 'admin'], function () {
    Route::get('admin', 'admin\AdminController@index');
    Route::resource('admin/users', 'admin\AdminUsersController');
    Route::resource('admin/commentaires', 'admin\AdminCommentairesController');
    Route::resource('admin/users.notes', 'admin\AdminNotesController');
});

//route de login
Route::get('login', ['uses' => 'LoginController@index', 'as' => 'login.index']);
Route::post('login', ['uses' => 'LoginController@connexion', 'as' => 'login.connexion']);
Route::get('logout', ['uses' => 'LoginController@deconnexion', 'as' => 'login.deconnexion']);