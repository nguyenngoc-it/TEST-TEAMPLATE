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
<form action="/display_discount" method="post">
@csrf
    <p>discount_amount:<input type="text" value=" {{$discount_amount}}"></p>
    <p>discount_price: <input type="text" value="{{$discount_price}}"> </p>
{{--    <p><input type="text" name="discount_price"></p>--}}
    <p><input type="submit" name="back"></p>

</form>

</body>
</html>
