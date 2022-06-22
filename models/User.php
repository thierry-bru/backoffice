<?php
    class User
    {
        public $pseudo;
        public $email;
        public $password;
        public $isAdmin;
        public function __construct($pPseudo,$pEmail,$pPassword,$pIsAdmin)
        {
            $this->pseudo = $pPseudo;
            $this->email = $pEmail;
            $this->password = $pPassword;
            $this->isAdmin = $pIsAdmin;
        }
        public function __toString()
        {
            return "$this->pseudo / $this->email / isAdmin= $this->isAdmin";
        }
    }
?>