<?php

namespace memo\controleurs;

use memo\vues\VuePrincipale;

class ControleurAccueil{

/**
  * Méthode qui affiche la vue correspondante
  * @param Request $rq : requete
  * @param Response $rs : reponse
  * @param $app : Application Slim
  * @return Response
 **/
  public function appeler_vue($rq,$rs,$app){
    $vue = new VuePrincipale($app);
    return $rs->getBody()->write($vue->render());
  }


}


 ?>
