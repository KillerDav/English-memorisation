<?php

namespace memo\bdd;

use cetofacile\modeles\tables\Compte as Compte;
use memo\modeles\Profil;

class Authentification{

/**
  * Méthode qui permet à un utilisateur de se connecter
  * @param String $username
  * @param String $password
  * @return boolean retourne si la connexion a fonctionnée
 **/
  public static function connexion($num){
    try{
          $profil = Profil::find($num);
          $_SESSION["name"] = $profil->pseudo;
          $_SESSION["id"] = $num;
          return true;

    }catch (\Exception $e) {
      return false;
    }
  }

}

 ?>
