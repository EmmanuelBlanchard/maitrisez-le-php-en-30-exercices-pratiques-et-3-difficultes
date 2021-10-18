<?php ob_start(); //NE PAS MODIFIER 
$titre = "Un catalogue de produits"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
$dsn = 'mysql:dbname=db_catalogue;host=localhost';
$user = 'root';
$password = '';

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
);

try {
    $pdo = new PDO($dsn, $user, $password,$options);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

$requete = "SELECT * FROM cours";
$stmt = $pdo->prepare($requete);
$stmt->execute();
$tousLesCours = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="row no-gutters">
    <?php foreach($tousLesCours as $unCours) : ?>
        <div class="col-4">
            <div class="card m-2" style="">
                <img src="source/<?= $unCours['image'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $unCours['libelle'] ?></h5>
                    <p class="card-text"><?= $unCours['description'] ?></p>
                    <?php 
                    $requete2 = "SELECT libelle FROM type WHERE idType = :idType";
                    $stmt = $pdo->prepare($requete2);
                    $stmt->bindValue(":idType", $unCours['idType'],PDO::PARAM_INT);
                    $stmt->execute();
                    $typeTexte = $stmt->fetch(PDO::FETCH_ASSOC);
                    
                    ?>
                    <span class="badge badge-primary"><?= $typeTexte['libelle'] ?></span>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
