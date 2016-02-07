	<?php

Route::group(["prefix" => "api"], function(){
	Route::group(['before' => 'auth.basic',"prefix" => "user"], function(){

		Route::get("/", array("uses" => "UserController@allUser"));

		Route::get("/{id}",array("uses" => "UserController@getUser"));

		Route::post("", array("uses" => "UserController@saveUser"));

		Route::put("/{id}",array( "uses" => "UserController@updateUser"));

		Route::delete("/{id}",array("uses" => "UserController@deleteUser"));
	});	
});


App::missing(function($exception)
{
    return Response::view('errors.missing', array(), 404);
});