<?php

class Actu
{
    public $sujet;
    public $titre;
    public $etat;
    public function __construct($sujet,$titre,$etat)
    {
        $this->sujet = $sujet;
        $this->titre = $titre;
        $this->etat = $etat;
    }
}