
<?php
include_once 'layout/header.php';
include_once '../Authorcontrol.php';
$ac= new Authorcontrol();

if (isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
   $au=  $ac->getByID($id);
}

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
<div class="container" >
    <h3 class="mt-1 mb-2">Add Author</h3>
    <hr>
    <form class="row g-3" method="post" action="update.php">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">First Name</label>
            <input type="text" class="form-control" id="inputEmail4" name="first-name" value="<?php echo $au->getFirstName()?>">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="inputPassword4" name="last-name" value="<?php echo $au->getLastName()?>">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputAddress" placeholder="abc@gmail.com" name="email" value="<?php echo $au->getEmail()?>">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Birthdate</label>
            <input type="date" class="form-control" id="inputAddress2" name="birthdate" value="<?php echo $au->getBirthdate()?>">
            <input type="hidden" class="form-control" id="inputAddress2" name="id" value="<?php echo $au->getId() ?>">
        </div>
        <div class="col-12">
            <a><button type="submit" class="btn btn-primary mt-2" name="update">Update</button></a>
        </div>
    </form>

</div>
</body>
</html>

