<?php
require_once './models/models.php';
require_once 'UserDataBase.php';
function pdo_connect()
{
    $host="localhost";
    $user="root";
    $password="";
    $dbname="backoffice";
    try {
        return new PDO("mysql:host=$host;dbname=$dbname;carset=utf8",$user,$password);
    } catch (PDOException $exception) {
        echo $exception->getMessage();
        die('connection failed');
    }
}

