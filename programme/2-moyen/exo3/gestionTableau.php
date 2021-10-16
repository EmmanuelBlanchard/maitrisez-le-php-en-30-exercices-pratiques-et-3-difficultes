<?php

function afficherTableau($tableau) {
    for($i=0;$i < count($tableau) ; $i++) {
        echo $tableau[$i] . " - ";
    }
}

function calculerMoyenne($tableauNotes) {
    $resultat = 0;
    // for($i = 0 ; $i < count($tableauNotes) ; $i++) {
    //     $resultat += $tableauNotes[$i];
    // }
    foreach($tableauNotes as $index => $note) {
        $resultat += $note;
    }
    return $resultat / count($tableauNotes);
}

function estTableauPair($tableau) {
    foreach($tableau as $valeur) {
        if($valeur % 2 !== 0) {
            return false;
        }
    }
    return true;
}

?>