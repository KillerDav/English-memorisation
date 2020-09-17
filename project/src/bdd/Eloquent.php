<?php

namespace memo\bdd;
use Illuminate\Database\Capsule\Manager as DB;

class Eloquent
{

/**
  * Méthode qui permet de se connecter à la base de données
  * @param ficher $file
 **/
    public static function start($file){
        $db = new DB();
        $db->addConnection(parse_ini_file($file));
        $db->setAsGlobal();
        $db->bootEloquent();
    }

}
