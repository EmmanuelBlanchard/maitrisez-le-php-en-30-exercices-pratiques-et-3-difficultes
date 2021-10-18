<?php ob_start(); //NE PAS MODIFIER
$titre = "Partie 5 - La POO"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
    class Arme {
        private $nom;
        private $image;
        private $description;

        public function __construct($nom,$image,$description) {
            $this->nom = $nom;
            $this->image = $image;
            $this->description = $description;
        }

        public function getNom() {
            $this->nom;
        }

        public function setNom($nom) {
            $this->nom = $nom;
        }

        public function getImage() {
            $this->image;
        }

        public function setImage($image) {
            $this->image = $image;
        }

        public function getDescription() {
            $this->description;
        }

        public function setDescription($description) {
            $this->description = $description;
        }

        public function __toString() {
            $texte = "";
            $texte .= '<div class="row align-items-center">';
                $texte .= '<div class="col-3 text-center">';
                    $texte .= '<img src="sources/'. $this->image . '" alt="">';
                $texte .= '</div>';
                $texte .= '<div class="col-auto">';
                    $texte .= '<h2>' . $this->nom . '</h2>';
                    $texte .= '<p>' . $this->description . '</p>';
                $texte .= '</div>';
            $texte .= '</div>';
            return $texte;
        }

    }

    $arme1 = new Arme("épée","epee/epee1.png","Une arme tranchante");
    $arme2 = new Arme("arc","arc/arc1.png","Une arme à distance");
    $arme3 = new Arme("hache","hache/hache1.png","Une arme tranchante ou un outil qui permet aussi de couper du bois");
    $arme4 = new Arme("fléau","fleau/fleau1.png","Une arme contondante du moyen âge");

    $armes = [$arme1,$arme2,$arme3,$arme4];

    $armeAleatoire = rand(1,5);
    $arme1->setImage("epee/epee" . $armeAleatoire . ".png");
    $armeAleatoire = rand(1,2);
    $arme2->setImage("arc/arc" . $armeAleatoire . ".png");
    $armeAleatoire = rand(1,5);
    $arme3->setImage("hache/hache" . $armeAleatoire . ".png");
    $armeAleatoire = rand(1,5);
    $arme4->setImage("fleau/fleau" . $armeAleatoire . ".png");

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


