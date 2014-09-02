<?php

Route::get('/', function()
{
    return View::make('hello');
});

Route::get('resource',function()
{
    return View::make('resource.index');
});

Route::get('document','ResourceController@document');

Route::get('audio','ResourceController@audio');

Route::get('video','ResourceController@video');

Route::get('profile','ResourceController@profile');

Route::get('resource_option','ResourceController@resource_option');

Route::get('add_resource',function()
{
    return View::make('resource.add_resource');
});

Route::resource('resource','ResourceController');