<?php

class ActuDataBase
{
    public static function create ($pdo,$pActu)
    {
        $sql= "INSERT INTO `actus`(`sujet`,`titre`,`etat`) 
        values ('".strip_tags($pActu->sujet)."','".$pdo->quote(strip_tags($pActu->titre))."',".$pdo->quote(strip_tags($pActu->etat)).");";
        $pdo->exec($sql);
      //  echo "sql:$sql";
    }
    public static function listAll($pdo)
    {
        $sql="SELECT * FROM `actus`;";
        return $pdo->query($sql);
    }
}