<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 5 : Private & Getters"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
    class Livre {
        private $nom;
        private $editeur;
        private $auteur;
        private $dateParution;

        public function __construct($nom,$editeur,$auteur,$dateParution) {
            $this->nom = $nom;
            $this->editeur = $editeur;
            $this->auteur = $auteur;
            $this->dateParution = $dateParution;
        }

        public function __toString() {
            $texte = "Nom : " . $this->nom ."<br />";
            $texte = "Éditeur : " . $this->editeur . "<br />";
            $texte .= "Auteur : " . $this->auteur . "<br />";
            $texte .= "Date de parution : " . $this->dateParution . "<br />";
            return $texte;
        }

        public function getNom() {
            return $this->nom;
        }

        public function setNom() {
            return $this->nom = $nom;
        }

        public function getEditeur() {
            return $this->editeur;
        }

        public function setEditeur() {
            return $this->editeur = $editeur;
        }

        public function getAuteur() {
            return $this->auteur;
        }

        public function setAuteur() {
            return $this->auteur = $auteur;
        }

        public function getDateParution() {
            return $this->dateParution;
        }

        public function setDateParution() {
            return $this->dateParution = $dateParution;
        }
    }

    $livre1 = new Livre("tonton","babibar","toto",2000);
    $livre2 = new Livre("tonton2","babibar","tata",2001);
    $livre3 = new Livre("abelix","bebat","titi",2000);
    $livre4 = new Livre("abelix2","bebat","titi",2000);
    $livre5 = new Livre("abelix","bebat","tutu",2000);

    $tableauxDeLivres = [
        $livre1,
        $livre2,
        $livre3,
        $livre4
    ];

    function afficherLibrairie($livres){
        echo "--------------------------- <br />";
        foreach($livres as $livre) {
            echo $livre . "<br />";        
            echo "--------------------------- <br />";
        }
    }

    function afficherLivres($livres,$editeur,$dateParution){
        echo "--------------------------- <br />";
        foreach($livres as $livre) {
            if(($livre->getEditeur() === $editeur || $editeur=== "tous") && ($livre->getDateParution() === (int)$dateParution || $dateParution=== "tous")) {
                echo $livre . "<br />";        
                echo "--------------------------- <br />";
            }
        }
    }
?>

<form action="" method="post">
    <div class="form-group">
        <label>Éditeur : </label>
        <select name="editeur" id="editeur" class="form-control">
            <option value="tous">tous</option>
            <option value="babibar">babibar</option>
            <option value="bebat">bebat</option>
        </select>
    </div>
    <div class="form-group">
        <select name="dateParution" id="dateParution" class="form-control">
            <option value="tous">tous</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
        </select>
    </div>
    <input type="submit" class="btn btn-primary" value="Valider" ></p>
</form>

<?php
    if(isset($_POST['editeur']) && !empty($_POST['editeur']) && 
    isset($_POST['dateParution']) && !empty($_POST['dateParution'])) {
        afficherLivres($tableauxDeLivres,$_POST['editeur'],$_POST['dateParution']);
    } else {
        afficherLibrairie($tableauxDeLivres);
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


