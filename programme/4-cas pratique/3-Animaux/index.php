<?php ob_start(); //NE PAS MODIFIER 
$titre = "Les animaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
require "MonPDO.class.php";
require "Animal.class.php";
require "AnimalDAO.class.php";
$animaux = AnimalDAO::getAnimauxBD();
foreach($animaux as $animal){
    $type = AnimalDAO::getTypeAnimal($animal['idAnimal']);
    $images = AnimalDAO::getImagesAnimal($animal['idAnimal']);
    new Animal($animal['idAnimal'],$animal['nom'],(int)$animal['age'],(int)$animal['sexe'],$type,$images);
}
?>

<?php 
foreach(Animal::$mesAnimaux as $animal){
    echo $animal->getNom() . "<br />";
    echo $animal->getType() . "<br />";
    foreach($animal->getImages() as $image){
        echo $image['libelle'] . "<br />";
        echo $image['url'] . "<br />";
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
