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
Route::get('/', ['uses' => 'WelcomeController@index', 'as' => 'home']);

//route utilisateurs
Route::resource('users', 'UsersController');

//permet de retourner la page user commentaire en fonction de son id
Route::resource('users.commentaires', 'UserCommentairesController', array('parameters' => 'singulier'));

//route admin
Route::group(['middleware' => 'isAdmin'], function () {
    Route::get('admin', ['uses' => 'admin\AdminController@index', 'as' => 'admin']);
    Route::resource('admin/users', 'admin\AdminUsersController', ['names' => [
        'index' => 'admin.users.index',
        'create' => 'admin.users.create',
        'store' => 'admin.users.store',
        'edit' => 'admin.users.edit',
        'update' => 'admin.users.update',
        'destroy' => 'admin.users.destroy'
    ]]);
});

//route de login
Route::get('login', ['uses' => 'LoginController@index', 'as' => 'login.index']);
Route::post('login', ['uses' => 'LoginController@connexion', 'as' => 'login.connexion']);
Route::get('logout', ['uses' => 'LoginController@deconnexion', 'as' => 'login.deconnexion']);