<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 20 : Formulaire et Tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<form action="" method="post">
    <div class="form-group">
        <label>Saisir un première note : </label>
        <input type="number" class="form-control" name="note1"/>
    </div>
    <div class="form-group">
        <label>Saisir une deuxième note : </label>
        <input type="number" class="form-control" name="note2"/>
    </div>
    <div class="form-group">
        <label>Saisir une troisième note : </label>
        <input type="number" class="form-control" name="note3"/>
    </div>
    <input type="submit" class="btn btn-primary" value="Valider" ></p>
</form>

<?php

if(isset($_POST['note1']) && !empty($_POST['note1']) && 
isset($_POST['note2']) && !empty($_POST['note2']) && 
isset($_POST['note3']) && !empty($_POST['note3'])) {
    
    $note1 = $_POST['note1'];
    $note2 = $_POST['note2']; 
    $note3 = $_POST['note3'];
    $notes = [$note1,$note2,$note3];
    $moyenne = calculerMoyenne($notes);
 
    echo "<b> <p>La moyenne des 3 est de : " . $moyenne . "</b> </p>";
}

// function calculerMoyenne($nomTableau) {
//     $moyenne = 0;
//     for($i = 0 ; $i < count($nomTableau) ; $i++) {
//         $moyenne += $nomTableau[$i];
//     }
//     return $moyenne / count($nomTableau);
// }

function calculerMoyenne($notes) {
    $resultat = 0;
    foreach($notes as $note) {
        $resultat += $note;
    }
    return $resultat / count($notes);
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


