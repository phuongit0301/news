<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/layout', 'IndexController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/movies', 'Movies\MoviesController@index');

Route::get('/dashboard', 'Auth\UserController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', [ 'as' => 'admin.layout.index', 'uses' => 'Admin\AdminController@index']);

    Route::resource('movies',  'Movies\MoviesController');

    Route::get('categories/index', ['as' => 'categories.index', 'uses' => 'CategoryController@index']);
    Route::get('categories/show', ['as' => 'categories.show', 'uses' => 'CategoryController@show']);
    Route::get('categories/edit', ['as' => 'categories.edit', 'uses' => 'CategoryController@edit']);
    Route::get('categories/create', ['as' => 'categories.create', 'uses' => 'CategoryController@create', 'middleware' => 'validator:App\Http\Models\Category']);
    Route::put('categories/update', ['as' => 'categories.update', 'uses' => 'CategoryController@update', 'middleware' => 'validator:App\Http\Models\Category']);
    Route::post('categories/store', ['as' => 'categories.store', 'uses' => 'CategoryController@store', 'middleware' => 'validator:App\Http\Models\Category']);

});