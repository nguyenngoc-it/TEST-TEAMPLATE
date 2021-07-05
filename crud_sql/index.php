<?php
include_once "DBConnect.php";
include_once "Authorcontrol.php";
$authorControl = new Authorcontrol();
$authorControl->showAllAuthor();