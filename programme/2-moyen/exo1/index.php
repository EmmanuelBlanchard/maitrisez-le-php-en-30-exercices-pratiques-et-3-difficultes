<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 1 : Les tables de multiplications"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$ligne = [];
for($j=1;$j <= 10;$j++) {
    $colonne = [];
    for($i=1;$i <= 10;$i++) {
        $colonne[] = $i * $j;
    }
    $ligne[] = $colonne;
}
?>

<table class="table">
    <?php for($j=0;$j < 10;$j++) : ?>
        <tr <?= ($j===0) ? 'class="font-weight-bold"' : '' ?>>
            <?php for($i=0;$i < 10 ;$i++) : ?>
                <td <?= ($i===0) ? 'class="font-weight-bold"' : '' ?>>
                    <?= $ligne[$j][$i] ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

<!--
<table class="table">
    <?php for($j=1;$j <= 10;$j++) : ?>
        <tr <?= ($j===1) ? 'class="font-weight-bold"' : '' ?>>
            <?php for($i=1;$i <= 10 ;$i++) : ?>
                <td <?= ($i===1) ? 'class="font-weight-bold"' : '' ?>>
                    <?= $j * $i ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
-->

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>


