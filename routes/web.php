<?php

Route::get('/',function () {
    
   
     return view('welcome');

});
Route::get('/','TaskController@index');
Route::get('task/{id}', 'TaskController@show');
