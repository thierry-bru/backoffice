<?php

class Actu
{
    public $sujet;
    public $titre;
    public $etat;
    private $id;
    public function __construct($sujet,$titre,$etat,$id=0)
    {
        $this->sujet = $sujet;
        $this->titre = $titre;
        $this->etat = $etat;
        if ($id!=0)
            $this->id = $id;
    }
 
    public function __toString()
    {
        return "$this->titre:$this->sujet:$this->etat";
    }
    public function  isSelected($etat)
    {
        if ($this->etat ==$etat)
            return " selected ";
        else
            return "";
    }
    public function getId()
   {
       return $this->id;
   }
}