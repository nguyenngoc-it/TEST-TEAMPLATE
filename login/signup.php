<?php
include "Data.php";
include "User.php";
include_once "Validate.php";
session_start();
$data = Data::loadData();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["user"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    foreach ($data as $user){
        if($name==$user->name){
            session_start();
            $_SESSION['user']="ten dang nhap da ton tai";
        }
        else{
            if( (Validate::checkUsername($name)&&Validate::checkEmail($email)&&  Validate::CheckPassWord($pass)) ==true){
                $username = new User($name, $email, $pass);
                Data::addData($username);
                header('location: login.php');
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

<body>
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                    <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Register</h5>
                    <form class="form-signin" method="post">
                        <div class="form-label-group">
                            <input name="user" type="text" id="inputUserame" class="form-control"
                                   placeholder="Username">
                            <label for="inputUserame">Username</label>
                            <p class="help-block text-danger"><?php if (isset($_SESSION['user'])) {
                                    echo $_SESSION['user'];
                                    session_destroy();
                                } ?></p>
                        </div>

                        <div class="form-label-group">
                            <input name="email" type="text" id="inputEmail" class="form-control"
                                   placeholder="Email address">
                            <label for="inputEmail">Email address</label>
                            <p class="help-block text-danger"><?php if (isset($_SESSION['email'])) {
                                    echo $_SESSION['email'];
                                    session_destroy();
                                } ?></p>
                        </div>

                        <hr>

                        <div class="form-label-group">
                            <input name="pass" type="password" id="inputPassword" class="form-control"
                                   placeholder="Password">
                            <label for="inputPassword">Password</label>
                            <p class="help-block text-danger"><?php if (isset($_SESSION['pass'])) {
                                    echo $_SESSION['pass'];
                                    session_destroy();
                                } ?></p>
                        </div>


                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                        <a class="d-block text-center mt-2 small" href="#">Sign In</a>
                        <hr class="my-4">
                        <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
                                    class="fab fa-google mr-2"></i> Sign up with Google
                        </button>
                        <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
                                    class="fab fa-facebook-f mr-2"></i> Sign up with Facebook
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>