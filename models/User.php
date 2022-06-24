<?php
    class User
    {
        public $pseudo;
        private $email;
        private $password;
        private $isAdmin;
        private int $id;
        public function __construct($pPseudo,$pEmail,$pPassword,$pIsAdmin=0,$pId=0)
        {
            $this->pseudo = $pPseudo;
            $this->email = $pEmail;
            $this->password = $pPassword;
            $this->isAdmin = (int)$pIsAdmin;
            $this->id = (int)$pId;
        }
        public function __toString()
        {
            return "$this->pseudo / $this->email / isAdmin= $this->isAdmin";
        }
        public function isAdmin():bool
        {
            return $this->isAdmin;
        }
        public function getId():int
        {
            return $this->id;
        }
    }
?>