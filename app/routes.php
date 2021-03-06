<?php
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);
Route::get('Our-Staff.html', ['as' => 'legalteam', 'uses' => 'PagesController@our_staff']);
Route::get('Contact-Us.html', ['as' => 'contactus', 'uses' => 'ContactusController@create']);
Route::post('contactus.store', ['as' => 'contactus.store', 'uses' => 'ContactusController@store']);

#Locations
Route::resource('location', 'LocationsController');
Route::get('Our-Locations.html', ['as' => 'location', 'uses' => 'LocationsController@index']);

#Victories
Route::resource('victories', 'VictoriesController');
Route::get('Our-Victories.html', ['as' => 'ourvictories', 'uses' => 'VictoriesController@index']);
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
    Route::get('blogs/{id}/edit', 'BlogsController@edit');
    Route::get('blogs/{id}/publish_blog', ['as' => 'publish_blog', 'uses' => 'BlogsController@publish_blog']);
    Route::get('blogs/{id}/hide_blog', ['as' => 'publish_blog', 'uses' => 'BlogsController@hide_blog']);
    Route::resource('blogs', 'BlogsController');

    Route::get('addVictory', ['as' => 'addVictory', 'uses' => 'VictoriesController@create']);
    Route::get('allVictories', ['as' => 'allVictories', 'uses' => 'VictoriesController@index_admin']);
    Route::get('allVictories/{id}/publish_victory', ['as' => 'publish_victory', 'uses' => 'VictoriesController@publish_victory']);
    Route::get('allVictories/{id}/hide_victory', ['as' => 'hide_victory', 'uses' => 'VictoriesController@hide_victory']);
    Route::get('allVictories/{id}/edit', 'VictoriesController@edit');
//    Route::post('allVictories/{id}', ['as' => 'victories.update' , 'uses' => 'VictoriesController@update']);
    Route::resource('victory', 'VictoriesController');

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

    Route::get('allfamilyLaws', ['as' => 'allPersonalInjury', 'uses' => 'FamilylawsController@admin_index']);
    Route::get('addallfamilyLaw', ['as' => 'addallfamilyLaw', 'uses' => 'FamilylawsController@create']);
    Route::post('allfamilyLaw.store', ['as' => 'allfamilyLaw.store', 'uses' => 'FamilylawsController@store']);
    Route::get('addallfamilyLaw/{id}/edit', 'FamilylawsController@edit');
    Route::resource('family', 'FamilylawsController');

    Route::get('/common', ['as' => 'common', 'uses' => 'CommonquestionsController@index_admin']);
    Route::get('/commonCreate', ['as' => 'commonCreate', 'uses' => 'CommonquestionsController@create']);
    Route::post('commons.store', ['as' => 'commons.store', 'uses' => 'CommonquestionsController@store']);
    Route::get('common/{id}/edit', 'CommonquestionsController@edit');
    Route::resource('commons', 'CommonquestionsController');

    Route::get('allTestimonials', ['as' => 'assTestimonials', 'uses' => 'TestimonialsController@admin_index']);
    Route::get('/createTestimonial', ['as' => 'createTestimonial', 'uses' => 'TestimonialsController@create']);
    Route::post('testimonials.store', ['as' => 'testimonials.store', 'uses' => 'TestimonialsController@store']);
    Route::get('testimonial/{id}/edit', 'TestimonialsController@edit');
    Route::resource('testimonials', 'TestimonialsController');

    Route::get('createVideo', ['as' => 'createVideo', 'uses' => 'VideosController@create']);
    Route::get('videos', ['as' => 'videos', 'uses' => 'VideosController@index']);
    Route::post('video.store', ['as' => 'video.store', 'uses' => 'VideosController@store']);
    Route::resource('videos', 'VideosController');
});

Route::get('tags/{id}', 'TagsController@show');
Route::resource('tags', 'TagsController');

Route::post('admin.store', ['as' => 'admin.store', 'uses' => 'SessionsController@store']);
Route::get('/admin_login', ['as' => 'admin_login', 'uses' => 'SessionsController@index']);

#Blogs for Users
Route::get('Blogs.html', ['as' => 'allblogs', 'uses' => 'BlogsController@index_users' ]);
Route::get('/allblogs/{id}', 'BlogsController@show');


#Personal Injuries
Route::get('Personal-Injury.html', ['as' => 'personalInjury', 'uses' => 'PersonalinjuriesController@index']);
Route::get('Personal-Injury.html/{id}', 'PersonalinjuriesController@show');

#Family Law
Route::get('Family-Law.html', ['as' => 'familyLaw', 'uses' => 'FamilylawsController@index']);
Route::get('Family-Law.html/{id}', 'FamilylawsController@show');

#Search
Route::get('search', ['as' => 'search', 'uses' => 'SearchController@index']);

#COMMONQUETIONS
Route::get('Common-Questions.html', ['as' => 'commonquestions', 'uses' => 'CommonquestionsController@index']);

#Testimonials
Route::get('Clients-Testimonials.html', ['as' => 'testimonials', 'uses' => 'TestimonialsController@index']);

#Videos
Route::get('allVideos', ['as' => 'allVideos', 'uses' => 'VideosController@index_users']);

#Practice Areas
Route::get('Practice-Areas.html', ['as' => 'practice_areas', 'uses' => 'PagesController@practice_areas']);
#lawyers
Route::get('jeremy', ['as' => 'jeremy', 'uses' =>'PagesController@lawyer_jeremy']);
Route::get('madeline', ['as' => 'jeremy', 'uses' =>'PagesController@lawyer_madeline']);
Route::get('holly', ['as' => 'jeremy', 'uses' =>'PagesController@lawyer_holly']);
Route::get('wu', ['as' => 'jeremy', 'uses' =>'PagesController@lawyer_wu']);
Route::get('peter', ['as' => 'jeremy', 'uses' =>'PagesController@lawyer_peter']);
Route::get('paul', ['as' => 'jeremy', 'uses' =>'PagesController@lawyer_paul']);
Route::get('legal_services', ['as' => 'legal_services', 'uses' =>'PagesController@legal_services']);