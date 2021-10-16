<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 9 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$a = 5;
$b = 122;

// function verifieSiNombreEstPair($nombre) {
//     if($nombre % 2 === 0) {
//         echo "<p>Le chiffre " . $nombre . " est pair <br /> </p>";
//     } else {
//         echo "<p>Le chiffre " . $nombre . " n'est pas pair <br /> </p>";
//     }
// }

// verifieSiNombreEstPair($a);
// verifieSiNombreEstPair($b);

function verifieSiNombreEstPair($nombre) {
    if($nombre % 2 === 0) {
        return true;
    } else {
        return false;
    }
}

echo "<p>";
    if(verifieSiNombreEstPair($a)) {
        echo "Le chiffre " . $a . " est pair <br />";
    } else {
        echo "Le chiffre " . $a . " n'est pas pair <br />";
    }
echo "</p>";

echo "<p>";
    if(verifieSiNombreEstPair($b)) {
        echo "Le chiffre " . $b . " est pair <br />";
    } else {
        echo "Le chiffre " . $b . " n'est pas pair <br />";
    }
echo "</p>";

?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
