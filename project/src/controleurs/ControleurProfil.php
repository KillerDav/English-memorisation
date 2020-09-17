<?php


namespace memo\controleurs;


use memo\bdd\Authentification;
use memo\modeles\Profil;

class ControleurProfil
{

    public function ajouterProfil($rq,$rs,$app){
        if (!Profil::where("pseudo","=",$_POST["name"])->first()) {
            $profil = new Profil();
            $profil->pseudo = $_POST["name"];
            $profil->save();
        }
        $lien = $app->router->pathFor('route_index');
        return $rs->withRedirect($lien, 301);
    }
    public function choisirProfil($rq,$rs,$app){
        Authentification::connexion($_POST["id"]);
        $lien = $app->router->pathFor('route_index');
        return $rs->withRedirect($lien, 301);
    }
    public function deconnexion($rq,$rs,$app){
        session_destroy();
        $lien = $app->router->pathFor('route_index');
        return $rs->withRedirect($lien, 301);
    }
}