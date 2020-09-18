<?php

require_once __DIR__ . '/src/vendor/autoload.php';

//Creation Slim
$conf =[
        'settings'=>[
          'displayErrorDetails' => true,
        ],
      ];

$app = new \Slim\App($conf);
//-

//Lancement Base de donnée
\memo\bdd\Eloquent::start(__DIR__ . '/src/conf/conf.ini');
//-

//Simplification des appels de classe
use memo\controleurs\ControleurAccueil as ControleurAccueil;
use memo\controleurs\ControleurProfil;
use memo\modeles\Profil;

// GET/POST

function verifierCompteAdmin(){
    $v = Profil::where("pseudo","=","Admin")->count();
    if($v <= 0){
        $p = new Profil();
        $p->pseudo = "Admin";
        $p->save();
    }
}

verifierCompteAdmin();

$app->get('/',function($rq,$rs){
    $c = new ControleurAccueil();
    return $c->appeler_vue($rq,$rs,$this);
})->setName('route_index');


$app->post('/AjouterProfil',function ($rq,$rs,$args) {
    $c = new ControleurProfil();
    return $c->ajouterProfil($rq,$rs,$this);
})->setName("route_ajoutprofil");

$app->post('/ChoisirProfil',function ($rq,$rs,$args) {
    $c = new ControleurProfil();
    return $c->choisirProfil($rq,$rs,$this);
})->setName("route_choixprofil");

$app->post('/Deconnexion',function ($rq,$rs,$args) {
    $c = new ControleurProfil();
    return $c->deconnexion($rq,$rs,$this);
})->setName("route_decoprofil");

$app->post('/AjouterQuestion',function ($rq,$rs,$args) {
    $c = new ControleurProfil();
    return $c->deconnexion($rq,$rs,$this);
})->setName("route_addquestion");
session_start();

$app->run();


 ?>
