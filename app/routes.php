<?php

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);
//Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@about']);
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
    Route::get('blogs/{id}/publish_blog', ['as' => 'publish_blog', 'uses' => 'BlogsController@publish_blog']);
    Route::get('blogs/{id}/hide_blog', ['as' => 'publish_blog', 'uses' => 'BlogsController@hide_blog']);

    Route::get('addVictory', ['as' => 'addVictory', 'uses' => 'VictoriesController@create']);
    Route::get('allVictories', ['as' => 'allVictories', 'uses' => 'VictoriesController@index_admin']);
    Route::get('allVictories/{id}/publish_victory', ['as' => 'publish_victory', 'uses' => 'VictoriesController@publish_victory']);
    Route::get('allVictories/{id}/hide_victory', ['as' => 'hide_victory', 'uses' => 'VictoriesController@hide_victory']);
    Route::get('allVictories/{id}/edit', 'VictoriesController@edit');
    Route::get('allVictories/{id}', ['as' => 'victories.update' , 'uses' => 'VictoriesController@edit']);

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

    Route::get('addPersonalInjuryService', ['as' => 'addPersonalInjuryService', 'uses' => 'PersonalinjuriesController@create']);
    Route::post('personalinjury.store', ['as' => 'personalinjury.store', 'uses' => 'PersonalinjuriesController@store']);
    Route::get('allPersonalInjury', ['as' => 'allPersonalInjury', 'uses' => 'PersonalinjuriesController@admin_index']);
    Route::get('allPersonalInjury/{id}/edit', 'PersonalinjuriesController@edit');
    Route::resource('personal', 'PersonalinjuriesController');
});

Route::get('tags/{id}', 'TagsController@show');
Route::resource('tags', 'TagsController');

Route::post('admin.store', ['as' => 'admin.store', 'uses' => 'SessionsController@store']);
Route::get('/admin_login', ['as' => 'admin_login', 'uses' => 'SessionsController@index']);

#Blogs for Users
Route::get('/allblogs', ['as' => 'allblogs', 'uses' => 'BlogsController@index_users' ]);
Route::get('/allblogs/{id}', 'BlogsController@show');


#Personal Injuries
Route::get('personalInjury', ['as' => 'personalInjury', 'uses' => 'PersonalinjuriesController@index']);
Route::get('personalInjury/{id}', 'PersonalinjuriesController@show');

#Family Law
Route::get('familyLaw', ['as' => 'familyLawo', 'uses' => 'FamilylawsController@index']);