<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task {{$task->name}}</title>
</head>
<body>
    <header>
                    {{--WORKS!--}}
        <a href="{{url()->previous()}}"> Назад </a>
    </header>
    <h1>
        Задача - {{$task->name}}
    </h1>
    <div>
        Описание - {{$task->text}}
    </div>
    <div>
        <a href="{{url('/tasks/' . $task->id . '/edit')}}">Изменить</a>
    </div>

</body>
</html>
