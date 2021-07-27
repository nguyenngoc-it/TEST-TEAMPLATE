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
<form action="/discount" method="post">
    @csrf
    <p>

        <input type="text" name="description" placeholder="description">
    </p>
    <p>

        <input type="number" name="price" placeholder="price">
    </p>
    <p>

        <input type="number" name="discount" placeholder="discount percent">
    </p>
    <p>
        <input type="submit" name="calculate" value="calculate discount">
    </p>
</form>
</body>
</html>
