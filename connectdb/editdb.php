<?php
include_once "BaseModel.php";
include_once "ConnectDb.php";


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
<form >

    <input name="firstname" type="text" value="">
    <input name="email" type="text">
    <button name="edit">Edit</button>

</form>
<?php
if (isset($_REQUEST['id'])) {

    $id = $_REQUEST['id'];

    $base->editCustomer($id);
    header("location:index.php");

}
?>

</body>
</html>
