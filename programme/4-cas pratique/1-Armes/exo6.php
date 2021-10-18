<?php ob_start(); //NE PAS MODIFIER
$titre = "Partie 6 - La POO"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
    class Arme {
        private $nom;
        private $level;
        private $description;

        public function __construct($nom,$description) {
            $this->nom = $nom;
            $this->level = 2;
            $this->description = $description;
        }

        public function __toString() {
            $texte = "";
            $texte .= '<div class="row align-items-center">';
                $texte .= '<div class="col-3 text-center">';
                    $texte .= '<img src="sources/'. $this->getImageName() . '" alt="">';
                $texte .= '</div>';
                $texte .= '<div class="col-auto">';
                    $texte .= '<h2>' . $this->nom . '</h2>';
                    $texte .= '<p>' . $this->description . '</p>';
                $texte .= '</div>';
            $texte .= '</div>';
            return $texte;
        }

        public function getImageName() {
            $rechercheCaractere = ["à", "é","è","ç","ù"];
            $remplacementCaractere = ["a", "e","e","c","u"];
            $nomSansAccent = str_replace($rechercheCaractere,$remplacementCaractere,$this->nom);
            return $nomSansAccent."/".$nomSansAccent.$this->level.".png";
        }

        public function getNom() {return $this->nom;}
        public function getLevel() {return $this->level;}
        public function getImage() {return $this->image;}
        public function getDescription() {return $this->description;}

        public function setNom($nom) {$this->nom = $nom;}
        public function setLevel($level) {$this->level = $level;}
        public function setImage($image) {$this->image = $image;}
        public function setDescription($description) {$this->description = $description;}

    }

    $arme1 = new Arme("épée","Une arme tranchante");
    $arme2 = new Arme("arc","Une arme à distance");
    $arme3 = new Arme("hache","Une arme tranchante ou un outil qui permet aussi de couper du bois");
    $arme4 = new Arme("fléau","Une arme contondante du moyen âge");

    $armes = [$arme1,$arme2,$arme3,$arme4];

?>

<div>
    <b>Voici toutes les armes : </b>
</div>

<p>
<?php foreach($armes as $index => $arme) {
        echo $arme;
} ?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>


