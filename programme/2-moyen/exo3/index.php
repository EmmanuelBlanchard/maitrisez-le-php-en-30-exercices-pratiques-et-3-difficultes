<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 3 : Les tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$animal1 = [
    "nom" => "Mina",
    "age" => 2,
    "type" => "chien"
];
$animal2 = [
    "nom" => "Tya",
    "age" => 7,
    "type" => "chat"
];
$animal3 = [
    "nom" => "Milo",
    "age" => 4,
    "type" => "chat"
];
$animal4 = [
    "nom" => "Hocket",
    "age" => 6,
    "type" => "chien"
];

$tableauxDAnimaux = [
    $animal1,
    $animal2,
    $animal3,
    $animal4
];

function afficherAnimaux($tableauxDAnimaux){
    echo "--------------------------- <br />";
    foreach($tableauxDAnimaux as $tableauDAnimal) {
        foreach($tableauDAnimal as $indice => $valeur) {
            echo $indice . " : " .$valeur . "<br />";
        }
        echo "--------------------------- <br />";
    }
}

function afficherAnimauxParType($tableauxDAnimaux,$type) {
    echo "--------------------------- <br />";
    foreach($tableauxDAnimaux as $tableauDAnimal) {
        if($tableauDAnimal["type"] === $type) {
            foreach($tableauDAnimal as $indice => $valeur) {
                echo $indice . " : " .$valeur . "<br />";
            }
            echo "--------------------------- <br />";
        }
    }
}
?>

<div>
    <a href="?type=tous" class="btn btn-primary">Tous</a>
    <a href="?type=chiens" class="btn btn-primary">Chiens</a>
    <a href="?type=chats" class="btn btn-primary">Chats</a>
</div>

<?php
    if(isset($_GET["type"]) && !empty($_GET["type"]) && $_GET["type"]!=="tout") {
        if($_GET["type"] === "chiens") {
            afficherAnimauxParType($tableauxDAnimaux,"chien");
        } else if ($_GET["type"] === "chat") {
            afficherAnimauxParType($tableauxDAnimaux,"chat");
        } else {
            afficherAnimaux($tableauxDAnimaux);
        }
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


