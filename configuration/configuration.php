<?php
class Configuration {

private static $parametres;

// Renvoie la valeur d'un paramètre de configuration
public static function get($nom, $valeurParDefaut = null) {
  if (isset(self::getParametres()[$nom])) {
    $valeur = self::getParametres()[$nom];
  }
  else {
    $valeur = $valeurParDefaut;
  }
  //var_dump($valeur);
  return $valeur;
}

// Renvoie le tableau des paramètres en le chargeant au besoin
private static function getParametres() {
  if (self::$parametres == null) {
    $cheminFichier = "./configuration/prod.ini";
    if (!file_exists($cheminFichier)) {
      $cheminFichier = "./configuration/dev.ini";
    }
    if (!file_exists($cheminFichier)) {
      throw new Exception("Aucun fichier de configuration trouvé");
    }
    else {
      self::$parametres = parse_ini_file($cheminFichier);
    }
  }
  return self::$parametres;
}
}