<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   @foreach($tasks as $task) 
   <h1><a href="/task/{{$task->id}}" > {{$task->name}}</a></h1>
   @endforeach
</body>
</html>