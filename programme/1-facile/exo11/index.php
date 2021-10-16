<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 11 : Les tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$hommes = ["Matthieu","Pierre","Marc","Jean"];

$prenoms = ["Morgane","Mathilde","Julie"];

for($i = 0 ; $i < count($hommes) ; $i++) {
    echo $i ." : " . $hommes[$i] . "<br />";
}
echo "------------------------------------ <br />";

// for($i = 0 ; $i < count($prenoms) ; $i++) {
//     echo $i." : " .$prenoms[$i] . " <br />";
// }

foreach($prenoms as $index => $prenom) {
    echo $index . " : " . $prenom . " <br />";
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
