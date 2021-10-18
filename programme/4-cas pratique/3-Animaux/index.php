<?php ob_start(); //NE PAS MODIFIER 
$titre = "Les animaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
require "MonPDO.class.php";
require "Animal.class.php";
// $pdo = MonPDO::getPDO();
// $requete = "SELECT * FROM animal";
// $stmt = $pdo->prepare($requete);
// $stmt->execute();
// $animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($animaux);

// new Animal(1,"toto",23,true,"chien","");
// new Animal(1,"titi",23,true,"chien","");
// foreach(Animal::$mesAnimaux as $animal) {
//     echo $animal->getNom() . "<br />";
// }

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
