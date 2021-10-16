<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 6 : Attribut Statique"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
    require("Maison.php");

    $maison1 = new Maison(2018,3,98);
    $maison2 = new Maison(2019,4,120);
    $maison3 = new Maison(2017,4,130);
   
    $tableauxDeMaisons = [
        $maison1,
        $maison2,
        $maison3,
    ];
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Nombre de chambres</th>
      <th scope="col">Surface</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($tableauxDeMaisons as $maison) : ?>
            <tr>
                <td> <?= $maison->getIdentifiant() ?></td>
                <td> <?= $maison->getDateCreation() ?></td>
                <td> <?= $maison->getNombreDeChambres() ?></td>
                <td> <?= $maison->getSurface() ?></td>
            </tr>
        <?php endforeach;?>
  </tbody>
</table>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>


