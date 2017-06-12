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
    return view('index');
});

Route::get('login',['uses'=>'LoginController@getLogin']);
Route::post('login',['uses'=>'LoginController@postLogin']);
Route::get('logout',['uses'=>'LoginController@getLogout']);
Route::group(['middleware'=>'isroleadmin'], function(){
	Route::group(['prefix' => 'adminsites'], function(){
		Route::get('/', function(){
    		return view('admins.dashboard.main');
    	});
    	Route::group(['prefix' => 'category'], function(){
    		Route::get('list',['uses'=>'CategoryController@getCateList']);
            
    		Route::group(['prefix' => 'ajax'], function(){
    			Route::get('list/{max}/{page}',['uses'=>'CategoryController@getCateListAjax']);
    			Route::get('total',['uses'=>'CategoryController@getTotalCategoriesAjax']);
    			Route::get('add',['uses'=>'CategoryController@getAddCateAjax']);
                Route::get('edit',['uses'=>'CategoryController@getEditCateAjax']);
                Route::get('delete/{id}',['uses'=>'CategoryController@getDeleteCateAjax']);
    		});
    	});
        Route::group(['prefix' => 'user'], function(){
            Route::get('list',['uses'=>'UserController@getUserList']);
            Route::get('add',['uses'=>'UserController@getUserAdd']);
            Route::post('add',['uses'=>'UserController@postUserAdd']);
            Route::get('edit/{id}',['uses'=>'UserController@getUserEdit']);
            Route::post('edit/{id}',['uses'=>'UserController@postUserEdit']);

            Route::group(['prefix' => 'ajax'], function(){
                Route::get('list/{max}/{page}',['uses'=>'UserController@getListUserAjax']);
                Route::get('total',['uses'=>'UserController@getTotalUserAjax']);
                Route::get('delete/{id}',['uses'=>'UserController@getDeleteUserAjax']);
                Route::get('checkunique/{username?}',['uses'=>'UserController@getCheckUniqueUserAjax']);
            });
        });

	});
});