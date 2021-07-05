<?php


class DBConnect
{
    private $dsn;
    private $username;
    private $password;

    public function __construct()
    {
        $this->dsn="mysql:host=localhost;dbname=demodb;charset=utf8";
        $this->username="root";
        $this->password="Nguyenngoc@123";

    }
    public function connect(){
        try {
            $con= new PDO($this->dsn,$this->username,$this->password);
//            echo "hello";
            return $con;
        }catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }

}