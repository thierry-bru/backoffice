<?php
class UserDataBase
{
    public static function create ($pdo,$pUser)
    {
        $sql= "INSERT INTO `.user`(`pseudo`, `email`, `password`,`isAdmin`) 
        values ('".strip_tags($pUser->pseudo)."'
        ,'".strip_tags($pUser->email)."','".strip_tags($pUser->password)."',0);";
        $pdo->exec($sql);
      //  echo "sql:$sql";
    }  
}