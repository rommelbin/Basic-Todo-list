<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>
<body>

<h1>Задачи:</h1>
@if($tasks)
    @foreach($tasks as $task)
        <div>
            <h3>
                <a href="{{url('/tasks/' . $task->id)}}">{{$task->name}}</a>
            </h3>
        </div>
        <div>
            <div> {{$task->text}}</div>
        </div>
    @endforeach
    <br>
    <hr>
    <div>
        <a href="{{route('tasks.create')}}">Добавить.</a>
    </div>
@else
    <div>Данные отсутствуют.</div>
@endif
</body>
</html>
