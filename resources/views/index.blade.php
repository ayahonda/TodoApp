<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>ToDoApp</title>
</head>
<body>
<div class="header">
</div>
<div class="main">
  <div class="left-content">
    <h3>Add Task</h3>
    <form method="POST" action="{{route('task.store')}}">
      @csrf
      <input class="input-group" type="text" name="name" placeholder="タスクを追加">
      <input class="btn btn-primary" type="submit" value="追加">
    </form>
  </div>
  <div class="right-content">
    <h3>List</h3>
    @foreach($tasks as $task)
    <form method="POST" action="/task/destroy/{{$task->id}}">
      @csrf
      <li class="task-list">
        {{$task->name}}
        <input class="btn btn-delete" type="submit" value="削除"></button>
      </li>
    </form>
    @endforeach
  </div>
</div>
  
</body>
</html>