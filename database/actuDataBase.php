<?php

class ActuDataBase
{
    public static function create ($pdo,$pActu)
    {
        $sql= "INSERT INTO `actus`(`sujet`,`titre`) 
        values ('".strip_tags($pActu->sujet)."','".strip_tags($pActu->titre)."');";
        $pdo->exec($sql);
      //  echo "sql:$sql";
    }
    public static function listAll($pdo)
    {
        $sql="SELECT * FROM `actus`;";
        return $pdo->query($sql);
    }
}