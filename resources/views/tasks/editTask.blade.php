<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        {{--WORKS!--}}
        <a href="{{url()->previous()}}"> Назад </a>
    </header>
    <form method="POST" action="{{route('tasks.update', $task)}}">
        @method('PUT')
        @csrf
        <div>
            Name:
            <input type="text" name="name" id="name" value="{{$task->text}}">
        </div>
        <div>
            Text:
            <input type="text" name="text" id="text" value="{{$task->name}}">
        </div>
        <input type="submit" value="Подтвердить изменение">
    </form>
</body>
</html>
