<?php
class Player {
    private $nom;
    private $force;
    private $pv;
    private $identifiantArme;

    public function __construct() {
        $this->force = 5;
        $this->pv = 100;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        return $this->nom = $nom;
    }

    public function getForce() {
        return $this->force;
    }

    public function setForce($force) {
        return $this->force = $force;
    }

    public function getPV() {
        return $this->pv;
    }

    public function setPV($pv) {
        return $this->pv = $pv;
    }

    public function getIdentifiantArme() {
        return $this->identifiantArme;
    }

    public function setIdentifiantArme($identifiantArme) {
        return $this->identifiantArme = $identifiantArme;
    }

    public function __toString() {
        $arme = Arme::recupererArme($this->identifiantArme);
        $texte = "Nom : " . $this->nom . "<br />";
        $texte .= "Force : " . $this->force . "<br />";
        $texte .= "PV : " . $this->pv . "<br />";
        $texte .= "Arme : " . $this->identifiantArme . "<br />";
        $texte .= $arme;
        return $texte;
    }
}
?>