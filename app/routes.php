<?php

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);
Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@about']);
Route::get('/contactus', ['as' => 'contactus', 'uses' => 'ContactusController@create']);
Route::post('contactus.store', ['as' => 'contactus.store', 'uses' => 'ContactusController@store']);
Route::get('/commonquestions', ['as' => 'commonquestions', 'uses' => 'PagesController@commonQuestions']);

#Locations
Route::resource('location', 'LocationsController');

#Victories
Route::resource('victories', 'VictoriesController');

#Registration
Route::get('/register','RegisterController@create');
Route::post('/register', ['as' => 'register.store', 'uses' => 'RegisterController@store']);

Route::filter('admin', function(){
    if(!Auth::check())
    {
        return Redirect::to('/login');
    }
});


Route::get('/login', ['as' =>'admin', 'uses' => 'SessionsController@create']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);


Route::group(array('before' => 'admin'), function(){
    Route::get('/alllocations', ['as' => 'alllocations', 'uses' => 'LocationsController@index_admin']);
    Route::get('/add_location', ['as' => 'add_location' , 'uses' => 'LocationsController@create']);
    Route::resource('blog', 'BlogsController', ['only' => 'destroy']);
    Route::get('/blogs', ['as' => 'blogs', 'uses' => 'BlogsController@index']);
    Route::get('/create', ['as' => 'create', 'uses' => 'BlogsController@create']);
    Route::post('blog.store', ['as' => 'blogs.store', 'uses' => 'BlogsController@store']);
    Route::get('addVictory', ['as' => 'addVictory', 'uses' => 'VictoriesController@create']);
    Route::get('/admin_addImages', ['as' => 'admin_addImages' , 'uses' => 'AddimagesController@create']);
    Route::get('/images', ['as' => 'images' , 'uses' =>'AddimagesController@index']);
    Route::post('image.store', ['as' => 'image.store', 'uses' => 'AddimagesController@store']);
    Route::patch('images/{id}', ['as' => 'images.update', 'uses' => 'AddimagesController@update']);
    Route::resource('image', 'AddimagesController');
    Route::get('createTag', ['as' => 'createTag', 'uses' => 'TagsController@create']);
    Route::post('tags.store', ['as' => 'tags.store', 'uses' => 'TagsController@store']);
    Route::get('tags', ['as' => 'tags', 'uses' => 'TagsController@index']);
    Route::get('users', ['as' => 'users', 'uses' => 'RegisterController@index']);
    Route::patch('user/{id}', ['as' => 'user.update', 'uses' => 'RegisterController@update']);
});

Route::get('tags/{id}', 'TagsController@show');
Route::resource('tags', 'TagsController');

Route::post('admin.store', ['as' => 'admin.store', 'uses' => 'SessionsController@store']);
Route::get('/admin_login', ['as' => 'admin_login', 'uses' => 'SessionsController@index']);

#Blogs for Users
Route::get('/allblogs', ['as' => 'allblogs', 'uses' => 'BlogsController@index_users' ]);
Route::get('/allblogs/{id}', 'BlogsController@show');
