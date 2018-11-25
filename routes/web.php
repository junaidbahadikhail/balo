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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [ 
    'uses' =>'HomeController@index',
    'as' =>'home'
    ]);


  
Route::group(['prefix' => 'admin','middleware' => 'auth'],function(){
  
    Route::get('/post/create',[
        'uses'=>'PostsController@create',
        'as'=> 'post.create'
    ]);
  
    Route::post('/post/store',[
        'uses'=>'PostsController@store',
        'as'=> 'post.store'
    ]);
Route::get('/categories/create',[
    'uses'=> 'CategoriesController@create',
    'as' => 'category.create'
]);
Route::get('/categories',[
    'uses'=> 'CategoriesController@index',
    'as' => 'categories'
]);

Route::post('/categories/store',[
    'uses'=> 'CategoriesController@store',
    'as' => 'category.store'
]);
Route::get('categories/edit/{id}',[
    'uses'=>'CategoriesController@edit',
    'as'=>'category.edit'
]);
Route::get('categories/delete/{id}',[
    'uses'=>'CategoriesController@destroy',
    'as'=>'category.delete'
]);
Route::post('categories/update/{id}',[
    'uses'=>'CategoriesController@update',
    'as'=>'category.update'
]);

});

