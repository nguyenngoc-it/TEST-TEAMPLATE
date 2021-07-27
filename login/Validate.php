<?php


class Validate
{
    public static function checkUsername($username){
        $pattern= "/^[A-Za-z]{6,}$/";
        if(!preg_match($pattern,$username)){
            session_start();
            $_SESSION['user']="Username khong dung dinh dang";
        }
        else{
            return true;
        }
    }
    public static function checkEmail($email){
        $pattern= "/^[A-Za-z0-9]+[A-Za-z0-9]*@[a-z]+(\.[a-z]+)$/";
        if(!preg_match($pattern, $email)){
            session_start();
            $_SESSION['email']="Email khong dung dinh dang";
        }
        else{
            return true;
        }
    }
    public static function CheckPassWord($pass){
        $pattern= "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
        if (!preg_match($pattern,$pass) ){
            session_start();
            $_SESSION['pass']='password khong hop le';
        }
        else{
            return true;
        }
    }
}