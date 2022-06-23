<?php
class UserDataBase
{
    public static function create ($pdo,$pUser)
    {
        $sql= "INSERT INTO `user`(`pseudo`, `email`, `password`,`isAdmin`) 
        values ('".strip_tags($pUser->pseudo)."'
        ,'".strip_tags($pUser->email)."','".strip_tags($pUser->password)."',0);";
        $pdo->exec($sql);
      //  echo "sql:$sql";
    }
    public static function checkLogin($pdo,$email,$password):bool
    {
      $sql = "SELECT ID FROM `user` WHERE email='".strip_tags($email)
      ."' and pseudo = '".strip_tags($password)."';";
     // echo "sql:$sql";
      $users = $pdo->query($sql);
      $nbFound = $users->rowCount();
      if ($nbFound ==1)
        return true;
      else
        return false;
    }  
}