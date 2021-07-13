<?php
require __DIR__."/vendor/autoload.php";

use App\Controller\Chanel\ChanelController;
$dbConnect= new \App\Model\DBConnect();

$channelcontroler= new ChanelController();
$page= isset($_REQUEST['page'])?$_REQUEST['page']:null;
//include_once 'app/View/frontend/index/index.php';
try {
    switch ($page){
        default:
            $channelcontroler->showindex();

    }
}catch (Exception $exception){
    $exception->getMessage();
}