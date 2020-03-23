<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks =DB::table('tasks')->get();
   
     return view('tasks.welcome',compact('tasks'));


    }

    public function show($id){
        $task =DB::table('tasks')->find($id);
        return view('tasks.show',compact('task'));

    }
}
