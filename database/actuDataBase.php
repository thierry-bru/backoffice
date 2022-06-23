<?php

class ActuDataBase
{
    public static function create ($pdo,$pUser)
    {
        $sql= "INSERT INTO `actus`(`text`) 
        values ('".strip_tags($pUser->pseudo)."');";
        $pdo->exec($sql);
      //  echo "sql:$sql";
    }
    public static function listAll($pdo)
    {
        $sql="SELECT * FROM `actus`;";
        return $pdo->query($sql);
    }
}