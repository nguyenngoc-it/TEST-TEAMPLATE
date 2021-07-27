<?php

//use PDO;

class ConnectDb
{
 public $servername;
 public $username;
 public $password;

 public function __construct()
 {
     $this->servername="mysql:host=localhost;dbname=classicmodels1;charset=utf8";
     $this->username="root";
     $this->password="Nguyenngoc@123";

 }
 public function connect(){
     try {
         $conn= new PDO($this->servername,$this->username,$this->password);
//         echo "ket noi thanh cong";
         return $conn;
     }catch (PDOException $e){
         echo $e->getMessage();
         die();
     }
 }


}

