<?php

Route::get('/', function () {
    $tasks =DB::table('tasks')->get();
    return $tasks;
     //return view('welcome'.compact('tasks'));
});
