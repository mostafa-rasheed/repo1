<?php


Route::get('/','TaskController@index');

Route::get('task/{id}', 'TaskController@show');

Route::post('store','TaskController@store');

Route::delete('delete/{id}','TaskController@destroy') ;

Route::get('edit/{name}', 'TaskController@edit1');

Route::post('update/{id}','TaskController@update');;
