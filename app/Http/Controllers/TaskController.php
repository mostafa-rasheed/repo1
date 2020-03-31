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

    public function edit1($id){
        
        $tasks =DB::table('tasks')->get();
        $post =DB::table('tasks')->find($id);
   
        return view('tasks.index',compact('tasks','post'));
        }
                
                
                public function update( $id,Request $request){
                    DB::table('tasks')->updateOrInsert(
                        ['id' => $id, 'name' => $request] );
                    return redirect()->route('tasks.welcome');
                    
                
                     
                        }

                    
    



}
