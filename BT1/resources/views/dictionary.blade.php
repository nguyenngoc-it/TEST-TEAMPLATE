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
<form action="/dictionary" method="post">
    @csrf
    <p><input type="text" name="english"></p>
{{--    <p><input type="submit" name="convertTo" value="convert"></p>--}}
    <button name="translate">Translate</button>

    <p> {{$vietnamese ?? ''}}</p>
</form>
</body>
</html>
