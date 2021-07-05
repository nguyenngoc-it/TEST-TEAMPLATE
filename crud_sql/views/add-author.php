
<?php
include_once 'layout/header.php'
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
<div class="container">
    <h3 class="mt-1 mb-2">Add Author</h3>
    <hr>
    <form class="row g-3" method="post">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">First Name</label>
            <input type="text" class="form-control" id="inputEmail4" name="first-name">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="inputPassword4" name="last-name">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputAddress" placeholder="abc@gmail.com" name="email">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Birthdate</label>
            <input type="date" class="form-control" id="inputAddress2" name="birthdate">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-2">Add</button>
        </div>
    </form>
    <?php
    include_once "../Authorcontrol.php";
    include_once "../Author.php";
    $ac= new Authorcontrol();
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        $firstName= $_POST['first-name'];
        $lastName=$_POST['last-name'];
        $email=$_POST['email'];
        $birthdAuate= $_POST['birthdate'];
        $author= new Author($firstName,$lastName,$email,$birthdate);
        $ac->create($author);
        header("location:../index.php");
    }
    include_once "layout/footer.php";
    ?>
</div>
</body>
</html>
