
  
@extends('layouts.app')
@section('tittel','Task List')
@section('content')
<div class="col-sm-offset-2 col-sm-8"> 
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    <!-- New Task Form -->
                    
                       
                           

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{$post->name}} ">
                 
                            
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <form action="update/{{$post->id}}/" method="POST ">
                                    @csrf
                                    
                                
                                    <button type="submit" class="btn btn-danger" >
                                        <i class="fa fa-btn fa-trash"></i>up date
                                    </button>
                                </form>
                            </div>
                        </div>
                  
                    




                </div>
            </div>

            <!-- Current Tasks -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    
                                <tr>
                                    <td class="table-text">
                                        <div> {{$task ->name}}</div></td>

                                    <!-- Task Delete Button -->
                                    <td>
                                        <form action="delete/{{$task->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
        </div>

        @endsection

