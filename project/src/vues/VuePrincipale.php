<?php


namespace memo\vues;


use memo\modeles\Profil;

class VuePrincipale
{
    private $path;
    private $app;
    public function __construct($app)
    {
        $this->path = $app->router->pathFor('route_index');
        $this->app = $app;
    }
    public function listeProfil(){
        $l = Profil::all();
        $res = "";
        $lienChoixProfil = $this->app->router->pathFor('route_choixprofil');

        foreach ($l as $profil){
            $elem = <<<END
<form action=$lienChoixProfil method="post">
  <input type="hidden" name="id" value="{$profil->idprofil}">
<input type="submit" name="name" value="{$profil->pseudo}" required>      
    </form>

END;

            $res .= $elem;
        }
        return $res;
    }

    public function render(){
        $lienAjoutProfil = $this->app->router->pathFor('route_ajoutprofil');
        $lienDecoProfil = $this->app->router->pathFor('route_decoprofil');
        $listeprofil = $this->listeProfil();
        $bienvenue = "";
        $deco = "";
        if (isset($_SESSION["id"])){
            $bienvenue = "<div class='welcome'>Bienvenue ".$_SESSION["name"]."</div>";
            $deco = <<<END
<form action=$lienDecoProfil method="post">
<input type="submit" value="Log out">
</form>
END;
        }




        $html = <<<END
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Memo</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
$bienvenue
$deco
<div id="buttonCreateChoose">
    <button class="Create"
            type="button">Create profil</button>
    <button class="Choose"
            type="button">Choose a profil</button>
</div>
<div id="CreateProfile" style = "display: none">
    <p class="title">Choose your name</p>
    <form action="$lienAjoutProfil" method="post">
        <input type="text" id="name" name="name" required>
        <input type="submit" id="valid" name="valid" value="Submit"  required>
        
    </form>
    <button class="Back"
                type="button">Back to the menu</button>
</div>
<div id="ChooseProfile" style = "display: none">
    <p class="title">Choose your profil</p>
    <div id="profil">
    $listeprofil
    </div>
    <button class="Back"
            type="button">Back to the menu</button>
</div>

<script src="js/index.js" type="module">
</script>
</body>
</html>
END;
        return $html;
    }
}