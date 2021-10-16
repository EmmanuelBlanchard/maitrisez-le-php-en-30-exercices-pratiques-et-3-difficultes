<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 7 : Manipuler deux classes"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

require("Player.php");
require("Arme.php");

$arme1 = new Arme("Hache",10);
$arme2 = new Arme("Epée",8);

$joueur1 = new Player();
$joueur1->setNom("Milo");
$joueur1->setIdentifiantArme($arme1->getIdentifiant());

echo $joueur1;
echo "----------------------------------- <br />";
$joueur2 = new Player();
$joueur2->setNom("Tya");
$joueur2->setIdentifiantArme($arme2->getIdentifiant());
echo $joueur2;

?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>


