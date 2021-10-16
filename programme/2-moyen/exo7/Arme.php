<?php
    class Arme {
        private static $increment = 1;
        private static $armes = [];

        private $identifiant;
        private $nom;
        private $nombreDeDegats;

        public function __construct($nom,$nombreDeDegats) {
            $this->identifiant = self::$increment;
            self::$increment++;
            $this->nom = $nom;
            $this->nombreDeDegats = $nombreDeDegats;
            self::$armes[] = $this;
        }

        public function getIdentifiant() {
            return $this->identifiant;
        }

        public function getNom() {
            return $this->nom;
        }

        public function setNom($nom) {
            return $this->nom = $nom;
        }

        public function getNombreDeDegats() {
            return $this->nombreDeDegats;
        }

        public function setNombreDeDegats($nombreDeDegats) {
            return $this->nombreDeDegats = $nombreDeDegats;
        }

        public function __toString() {
            $texte = "ID : " . $this->identifiant ."<br />";
            $texte .= "Nom : " . $this->nom . "<br />";
            $texte .= "Dégats : " . $this->nombreDeDegats . "<br />";
            return $texte;
        }

        public static function recupererArme($identifiant) {
            foreach(self::$armes as $arme) {
                if($arme->identifiant === $identifiant) {
                    return $arme;
                }
            }
        }
    }
?>