<?php
include_once "ConnectDb.php";
include_once "BaseModel.php";


?>
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
<form method="post">
    <input name="firstname" type="text">
    <input name="email" type="text">

    <button name="add">Add</button>
</form>
<?php
$firstname= $_POST['firstname'];
$email= $_POST['email'];
$employ= new BaseModel();

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $employ->addCustomer($firstname, $email);
}

?>
</body>
</html>