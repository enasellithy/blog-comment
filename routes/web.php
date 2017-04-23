<?php

/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');*/

/*
|--------------------------------------------------
|   Web Routes
|--------------------------------------------------
*/

Route::group(['middleware'=>'web'],function(){
	Route::get('/', function () {
    return view('welcome');
	});
	Route::get('(locale)','LangController@index');
	Auth::routes();
    Route::get('/home', 'HomeController@index');
    Route::resource('/','FrontController');
    Route::get('/post/{id}/show','FrontController@show');
    Route::post('comment.store/{post_id}','CommentController@store');
    Route::get('comment.destroy/{id}','CommentController@destroy');
    Route::get('auth/{provider}', 'SocialController@redirectToProvider');
    Route::get('auth/{provider}/callback', 'SocialController@handleProviderCallback');
});
/*
|--------------------------------------------------
|   Admin Routes
|--------------------------------------------------
*/
Route::group(['middleware'=>['web','admin']],function(){
	Route::get('/admin','HomeController@admin');
	Route::resource('/admin/post','PostController');
	Route::get('/post/{post}/edit','PostController@edit');
	Route::post('admin/post/{post}/update','PostController@update');
	//Route::get('post/{id}/delete','PostController@destroy');
	Route::get('admin/post/{post}/dele',[
		'uses' => 'PostController@destroy',
		'as'   => 'post.destroy'
		]);
	Route::get('/images/{$image}',function($name){
			return public_path('images/'.$name); 
		});
});