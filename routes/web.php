<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'frontend'], function ()
{
Route::any('/','ApplicationController@index')->name('index');
    Route::any('/contact','ApplicationController@contact')->name('contact');

    Route::any('/post/{id?}', 'ApplicationController@post')->name('post');
    Route::any('/category/{id?}', 'ApplicationController@category')->name('category');
    Route::any('/subcategory/{id?}', 'ApplicationController@subcategory')->name('subcategory');

    Route::any('/about','ApplicationController@about')->name('about');
    Route::any('/login','ApplicationController@login')->name('login');


    Route::group(['prefix'=>'users' ,'middleware'=>'auth:web' ], function () {
        Route::any('/', 'ApplicationController@user')->name('users');
    Route::any('logout', 'ApplicationController@logout')->name('logout');

    });
});


Route::group(['namespace'=>'backend'], function ()
{
    Route::any('admin-login','AdminUserController@login')->name('admin-login');
});

Route::group(['namespace'=>'backend','prefix'=>'admin' ,'middleware'=>'auth:admin'], function ()
{
    Route::any('/','DashboardController@index')->name('admin');
    Route::group(['prefix'=>'admin-users'], function () {
        Route::any('/', 'AdminUserController@index')->name('show-admin-users');
        Route::any('/add-admin-user', 'AdminUserController@add')->name('add-admin-user');
        Route::any('update-user-status', 'AdminUserController@updateStatus')->name('update-user-status');
        Route::any('update-user-type', 'AdminUserController@updateType')->name('update-user-type');
        Route::any('delete-admin-user/{criteria?}', 'AdminUserController@delete')->name('delete-admin-user');
        Route::any('edit-admin-user/{id?}', 'AdminUserController@edit')->name('edit-admin-user');
        Route::any('edit-admin-user-action', 'AdminUserController@editAction')->name('edit-admin-user-action');


    });



    Route::group(['prefix'=>'category'], function () {
        Route::any('/', 'CategoryController@index')->name('show-category');
        Route::any('/add-category', 'CategoryController@add')->name('add-category');
        Route::any('update-category-status', 'CategoryController@updateStatus')->name('update-category-status');
        Route::any('delete-category/{criteria?}', 'CategoryController@delete')->name('delete-category');
        Route::any('edit-category/{id?}', 'CategoryController@edit')->name('edit-category');
        Route::any('edit-category-action', 'CategoryController@editAction')->name('edit-category-action');
    });

    Route::group(['prefix'=>'subcategory'], function () {
        Route::any('/', 'SubCategoryController@index')->name('show-subcategory');
        Route::any('/add-subcategory', 'SubCategoryController@add')->name('add-subcategory');
        Route::any('update-subcategory-status', 'SubCategoryController@updateStatus')->name('update-subcategory-status');
        Route::any('delete-subcategory/{criteria?}', 'SubCategoryController@delete')->name('delete-subcategory');
        Route::any('edit-subcategory/{id?}', 'SubCategoryController@edit')->name('edit-subcategory');
        Route::any('edit-subcategory-action', 'SubCategoryController@editAction')->name('edit-subcategory-action');
    });
    Route::any('photography', 'AdminUserController@photography')->name('photography');

    Route::group(['prefix'=>'post'], function () {
        Route::any('/', 'PostController@index')->name('show-post');
        Route::any('/add-post', 'PostController@add')->name('add-post');
        Route::any('update-post-status', 'PostController@updateStatus')->name('update-post-status');
        Route::any('delete-post/{criteria?}', 'PostController@delete')->name('delete-post');
        Route::any('edit-post/{id?}', 'PostController@edit')->name('edit-post');
        Route::any('edit-post-action', 'PostController@editAction')->name('edit-post-action');
    });




    Route::any('admin-logout', 'AdminUserController@logout')->name('admin-logout');

});
