<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>ToDoApp</title>
</head>
<body class="bg-light">
  <div class="main container">
    <div class="header">
    </div>
    <div class="row my-3 py-3 bg-white">
      <h3 class="text-secondary">Add Task</h3>
      <form class="form-inline" method="POST" action="{{route('task.store')}}">
        @csrf
        <div class="row">
          <div class="col-sm-11 d-flex align-items-center">
            <input class="input-group" type="text" name="name" placeholder="タスクを入力">
          </div>
          <div class="col-sm-1">
            <input class="btn btn-primary" type="submit" value="追加">
          </div>
        </div>
      </form>
    </div>
    <div class="right-content row">
      <div class="now-task py-3 col bg-white">
        <h3 class="text-secondary">List</h3>
        @foreach($tasks as $task)
        <form method="POST" action="/task/destroy/{{$task->id}}">
          @csrf
          <li class="task-list my-1">
            {{$task->name}}
            <input class="btn btn-secondary btn-sm" type="submit" value="削除"></button>
          </li>
        </form>
        @endforeach
      </div>
      <div class="done-task col">

      </div>
    </div>
  </div>
  
</body>
</html>