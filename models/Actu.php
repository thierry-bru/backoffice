<?php
class Actu
{
    public $sujet;
    public $titre;
    public $photo;
    public $etat;
    public function __construct($sujet,$titre)
    {
        $this->sujet = $sujet;
        $this->titre = $titre;
    }
}