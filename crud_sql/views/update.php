<?php
include_once "../Authorcontrol.php";
include_once "../Author.php";
$authors = new Authorcontrol();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_REQUEST['id'];
    $firstname = $_REQUEST['first-name'];
    $lastname = $_REQUEST['last-name'];
    $email = $_REQUEST['email'];
    $birtdate = $_REQUEST['birthdate'];
    $author = new Author($firstname, $lastname, $email, $birtdate);
    $authors->updateAuthor($id, $author);
    header('location: ../index.php');

}
