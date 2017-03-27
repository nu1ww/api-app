<?php


Route::get('/',function (){
    $redis=app()->make('redis');
    $redis->set('key1','testkey');
    return $redis->get('key1');
});


Route::group(['prefix'=>'api/v1'],function(){

    Route::get('lessons/{id}/tags','TagsController@index');

    Route::resource('lessons','LessonsController');
    Route::resource('tags','TagsController',['only'=>['index','show']]);
});
