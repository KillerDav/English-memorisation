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

/**
use cetofacile\controleurs\ControleurAccueil as ControleurAccueil;
use cetofacile\controleurs\ControleurParametre as ControleurParametre;
use cetofacile\controleurs\ControleurConnexion as ControleurConnexion;
use cetofacile\controleurs\ControleurInscription as ControleurInscription;
use cetofacile\controleurs\ControleurListeAliment as ControleurListeAliment;
use cetofacile\controleurs\ControleurPatient as ControleurPatient;
use cetofacile\controleurs\ControleurRepas as ControleurRepas;
use cetofacile\controleurs\ControleurCompte as ControleurCompte;
use cetofacile\controleurs\ControleurHistorique as ControleurHistorique;
use cetofacile\controleurs\ControleurRecette as ControleurRecette;
use cetofacile\controleurs\ControleurRecetteDetail as ControleurRecetteDetail;
use cetofacile\controleurs\ControleurListeRecette as ControleurListeRecette;
use cetofacile\controleurs\ControleurCreationRecette as ControleurCreationRecette;
use cetofacile\controleurs\ControleurSuivi;
use cetofacile\controleurs\ControleurAide;
use cetofacile\controleurs\ControleurContact;
//-
*/
// GET/POST

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
session_start();

$app->run();


 ?>
