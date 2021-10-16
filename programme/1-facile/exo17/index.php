<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 17 : Tableau complexes"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php

$personneMatthieu = [
    "nom" => "Matthieu",
    "age" => 30,
    "sexe" => true,
    "notes" => [2,5,15,10]
];
$personneMarie = [
    "nom" => "Marie",
    "age" => 30,
    "sexe" => false,
    "notes" => [10,12,11,11]
];
$personneMarc = [
    "nom" => "Marc",
    "age" => 25,
    "sexe" => true,
    "notes" => [15,5,20,15]
];
$personneMathilde = [
    "nom" => "Mathilde",
    "age" => 21,
    "sexe" => false,
    "notes" => [3,6,9,12]
];

$tableauxDePersonnes = [
    $personneMatthieu,
    $personneMarie,
    $personneMarc,
    $personneMathilde 
];

foreach($tableauxDePersonnes as $index => $tableauDePesonne) {
    afficherPersonne($tableauDePesonne);
    echo "--------------------------- <br />";
}

function afficherPersonne($tableauDePesonnes){
    echo "Nom : " .$tableauDePesonnes["nom"] . "<br />";
    echo "Age : " .$tableauDePesonnes["age"] . "<br />";
    if($tableauDePesonnes["sexe"]) {
        echo "Sexe : Homme <br />";
    } else {
        echo "Sexe : Femme <br />";
    }
    $resultat = 0;
    foreach($tableauDePesonnes["notes"] as $index => $note) {
        echo "Note " . ($index+1). " : " .$note . "<br />";
        $resultat += $note;
    }
    echo "La moyenne est de " . ($resultat / count($tableauDePesonnes["notes"])) . "<br/>";
}

function calculerMoyenne($nomTableau) {
    $moyenne = 0;
    for($i = 0 ; $i < count($nomTableau) ; $i++) {
        $moyenne += $nomTableau[$i];
    }
    return $moyenne / count($nomTableau);
}

?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>


