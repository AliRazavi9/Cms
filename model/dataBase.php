<?php
$Host = "localhost";
$dataBase = "fivelearn";
$userName = "root";
$Password = "";
$setName = array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8');

try{
    $connect = new PDO("mysql:host = $Host;dbname=$dataBase",$userName,$Password,$setName);
}catch(PDOException $error) {
    echo 'خطا در اتصال به دیتابیس'. $error->getmessage();

}

$tbl_user='users';