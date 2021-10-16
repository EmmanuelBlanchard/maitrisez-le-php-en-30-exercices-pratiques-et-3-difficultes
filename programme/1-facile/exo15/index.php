<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 15 : Tableau associatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$personneMatthieu = [
    "nom" => "Matthieu",
    "age" => 30,
    "sexe" => true
];
$personneMarie = [
    "nom" => "Marie",
    "age" => 30,
    "sexe" => false
];

$tableauxDePersonnes = [$personneMatthieu,$personneMarie];

function afficherAffichagePersonne($tableauDePesonnes){
    echo "Nom : " .$tableauDePesonnes["nom"] . "<br />";
    echo "Age : " .$tableauDePesonnes["age"] . "<br />";
    if($tableauDePesonnes["sexe"]) {
        echo "Sexe : Homme <br />";
    } else {
        echo "Sexe : Femme <br />";
    }
}

afficherAffichagePersonne($personneMatthieu);
echo "--------------------------- <br />";
afficherAffichagePersonne($personneMarie);


?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>


