<?php ob_start(); //NE PAS MODIFIER
$titre = "Partie 3 - Tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
    $arme1 = [
        "nom" => "épée",
        "image" => "epee/epee1.png",
        "description" => "Une arme tranchante",
    ];

    $arme2 = [
        "nom" => "arc",
        "image" => "arc/arc1.png",
        "description" => "Une arme à distance",
    ];

    $arme3 = [
        "nom" => "hache",
        "image" => "hache/hache1.png",
        "description" => "Une arme tranchante ou un outil qui permet aussi de couper du bois",
    ];

    $arme4 = [
        "nom" => "fléau",
        "image" => "fleau/fleau1.png",
        "description" => "Une arme contondante du moyen âge",
    ];

    $armes = [$arme1,$arme2,$arme3,$arme4];
?>

<div>
    <b>Voici les armes : </b>
</div>

<p>
<?php foreach($armes as $index => $arme) { ?>
        <div class="row align-items-center">
            <div class="col-3 text-center">
                <img src="sources/<?php echo $arme['image']; ?>" alt="">
            </div>
            <div class="col-auto">
                <h2><?php echo $arme['nom']; ?></h2>
                <p><?php echo $arme['description']; ?></p>
            </div>
        </div>
<?php } ?>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>


