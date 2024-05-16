<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <form action="{{route('post')}}" method="post">
            @csrf
            <input type="text" name="todo">
            <button type="submit">Add</button>
        <form>
        <ul>
            @foreach ($todos as $todo)
                <li>{{$todo->todo}}</li>
            @endforeach
        </ul>
    </body>
</html>