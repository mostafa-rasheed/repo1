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

    public function store(Request $request){
        
        DB::table('tasks') ->insert([
            'name'=> $request ->name ,'created_at'=>now(),
            'updated_at'=> now(),
        ]);

            return redirect()->back();
            
    }


    public function destroy($id){
    
     
     DB::table('tasks')->where('id','=',$id)->delete();
     return redirect()->back();


    }
}
