<!-- ل الداتا بيز -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <ul>
        @foreach ($tasks as $index => $task)
            <li><a href="contact/.{{ $task->id }}">{{ $task->name }}</a></li> <!-- طباعه الاسم -->
            <li>{{ $task->id }}</li> <!-- طباعه ال id -->
            <li>{{ $task->created_at }}</li> <!-- طباعه وقت الانشاء -->
        @endforeach
    </ul>
</body>

</html>
