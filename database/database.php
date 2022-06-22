<?php
require_once './models/models.php';

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

function create ($pUser)
{
    $pdo = pdo_connect();
    $sql= "INSERT INTO `.user`(`pseudo`, `email`, `password`,`isAdmin`) 
    values ('".strip_tags($pUser->pseudo)."'
    ,'".strip_tags($pUser->email)."','".strip_tags($pUser->password)."',0);";
    $pdo->exec($sql);
    echo "sql:$sql";
}