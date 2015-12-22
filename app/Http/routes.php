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

Route::resource('/', 'IndexController');
Route::get('tin-tuc/{slug}', 'CategoryController@index');

//Route::get('categories/{slugCategory}/{slugPost}', 'PostController@index');

Route::controllers(['auth' => 'Auth\AuthController', 'password' => 'Auth\PasswordController', ]);

Route::get('/dashboard', 'Auth\UserController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    
    Route::get('/', ['as' => 'admin.layout.index', 'uses' => 'Admin\AdminController@index']);
    
    Route::resource('movies', 'Movies\MoviesController');
    
    Route::resource('categories', 'Admin\CategoryController');
    
    Route::resource('posts', 'Admin\PostController');
    
    Route::post('files/upload', ['uses' => 'Admin\FileController@fileUpload', 'as' => 'files.upload']);
    Route::get('files/list', ['uses' => 'Admin\FileController@fileList', 'as' => 'files.list']);
    
    Route::get('/upload', ['uses' => 'Admin\UploadController@index', 'as' => 'admin.upload']);
    
    // Add the following routes
    Route::post('upload/file', 'UploadController@uploadFile');
    Route::delete('upload/file', 'UploadController@deleteFile');
    Route::post('upload/folder', 'UploadController@createFolder');
    Route::delete('upload/folder', 'UploadController@deleteFolder');
});
