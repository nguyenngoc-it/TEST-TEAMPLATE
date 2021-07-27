<?php
include_once "ConnectDb.php";

class BaseModel
{
    public $dbConnect;
    public function __construct()
    {
        $this->dbConnect= new ConnectDb();
    }
    public function getAllCustomer(){
        $sql= "select * from employees";
        $stmt= $this->dbConnect->connect()->query($sql);
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();
        $arr= $stmt->fetchAll();
        return $arr;
    }

    public function deleteCustomer($id){
        $sql= "DELETE FROM `employees` where employeeNumber=" . $id;
        $stmt=$this->dbConnect->connect()->query($sql);
        $stmt->execute();
    }
    public function addCustomer($firstname, $email){
        $sql= "INSERT INTO employess(firstName,email) values ($firstname,$email)";
        $stmt= $this->dbConnect->connect()->query($sql);

        $stmt->execute();
    }

//    public function editCustomer($id){
//        $sql="UPDATE `employees` SET firstName= newfirstName where employeeNumber=".$id;
//        $stmt=$this->dbConnect->connect()->query($sql);
//        $stmt->execute();
//    }

}