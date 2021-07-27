<?php


class Data
{
    public static $path= "user.json";

    public static function saveData($data)
    {
        $dataJson= json_encode($data);
        file_put_contents(self::$path, $dataJson);
    }

    public static function convertToUser($data): array
    {
        $users= [];
        foreach ($data as $item){
            $user= new User($item->name,$item->email, $item->password);
            array_push($users, $user);
        }
        return $users;
    }

    public static function loadData()
    {
        $dataJson= file_get_contents(self::$path);
        $data= json_decode($dataJson);
        return self::convertToUser($data);
    }

    public static function addData($user)
    {
        $users= self::loadData();
        array_push($users,$user);
        self::saveData($users);
    }
}