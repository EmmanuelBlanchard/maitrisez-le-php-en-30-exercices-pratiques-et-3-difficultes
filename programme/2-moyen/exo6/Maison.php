<?php
    class Maison {
        private static $increment = 1;

        private $identifiant;
        private $dateCreation;
        private $nombreDeChambres;
        private $surface;

        public function __construct($dateCreation,$nombreDeChambres,$surface) {
            $this->identifiant = self::$increment;
            self::$increment++;
            $this->dateCreation = $dateCreation;
            $this->nombreDeChambres = $nombreDeChambres;
            $this->surface = $surface;
        }

        public function getIdentifiant() {
            return $this->identifiant;
        }

        public function getDateCreation() {
            return $this->dateCreation;
        }

        public function setDateCreation($dateCreation) {
            return $this->dateCreation = $dateCreation;
        }

        public function getNombreDeChambres() {
            return $this->nombreDeChambres;
        }

        public function setNombreDeChambres($nombreDeChambres) {
            return $this->nombreDeChambres = $nombreDeChambres;
        }

        public function getSurface() {
            return $this->surface;
        }

        public function setSurface($surface) {
            return $this->surface = $surface;
        }

        public function __toString() {
            $texte = "Identifiant : " . $this->identifiant ."<br />";
            $texte .= "Date de création : " . $this->dateCreation . "<br />";
            $texte .= "Nombre de chambres : " . $this->nombreDeChambres . "<br />";
            $texte .= "Surface : " . $this->surface . "<br />";
            return $texte;
        }
    }
?>