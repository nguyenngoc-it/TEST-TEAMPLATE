<?php


namespace App\Model;


use mysql_xdevapi\Exception;

class UserModel
{
    private $userConnect;

    /**
     * UserModel constructor.
     * @param $userConnect
     */
    public function __construct()
    {
        $this->userConnect = new DBConnect();
    }


    public function saveUser($request)
    {
        try {
            $sql = "insert into `users`(`username`, `password`, `email`) values (?,?,?)";
            $stmt = $this->userConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['user']);
            $stmt->bindParam(2, $request['email']);
            $stmt->bindParam(3, $request['pass']);
            $stmt->execute();
        } catch (\PDOException $exception) {
            $exception->getMessage();
        }


    }

    public function login($request)
    {
        try {


            $sql = "select * from `users` where `username`=? and `password`=?";
            $stmt = $this->userConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['user']);
            $stmt->bindParam(2, $request['pass']);
            $stmt->execute();

            if ($stmt->rowCount()>=1){
                $user = $stmt->fetchAll(\PDO::FETCH_OBJ);
                if ($user[0]->role==1){
                    header('location: home.php');
                } else if ($user[0]->role==0) {
                    header('location: index.php');
                }

            }
            else {
               header('location: app/View/frontend/login/login.php');
            }


        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
    }

}