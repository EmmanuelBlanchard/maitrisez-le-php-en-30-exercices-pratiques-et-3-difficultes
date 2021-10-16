<?php ob_start(); //NE PAS MODIFIER
$titre = "Exo 4 : Les objets"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
    class Animal {
        public $nom;
        public $age;
        public $type;

        public function __construct($nom,$age,$type) {
            $this->nom = $nom;
            $this->age = $age;
            $this->type = $type;
        }

        
    }

    $animal1 = new Animal("Mina",2,"chien");
    $animal2 = new Animal("Tya",7,"chat");
    $animal3 = new Animal("Milo",4,"chat");
    $animal4 = new Animal("Hocket",6,"chien");

    $tableauxDAnimaux = [
        $animal1,
        $animal2,
        $animal3,
        $animal4
    ];

    function afficherAnimaux($tableauxDAnimaux){
        echo "--------------------------- <br />";
        foreach($tableauxDAnimaux as $tableauDAnimal) {
            echo "Nom : " . $tableauDAnimal->nom ."<br />";
            echo "Age : " . $tableauDAnimal->age . "<br />";
            echo "Type : " . $tableauDAnimal->type . "<br />";
            
            echo "--------------------------- <br />";
        }
    }

    function afficherAnimauxParType($tableauxDAnimaux,$type) {
        echo "--------------------------- <br />";
        foreach($tableauxDAnimaux as $tableauDAnimal) {
            if($tableauDAnimal->type === $type) {
                echo "Nom : " . $tableauDAnimal->nom . "<br />";
                echo "Age : " . $tableauDAnimal->age . "<br />";
                echo "Type : " . $tableauDAnimal->type . "<br />";

                echo "--------------------------- <br />";
            }
        }
    }


?>

<div>
    <a href="?type=tous" class="btn btn-primary">Tous</a>
    <a href="?type=chiens" class="btn btn-primary">Chiens</a>
    <a href="?type=chats" class="btn btn-primary">Chats</a>
</div>

<?php
    if(isset($_GET["type"]) && !empty($_GET["type"]) && $_GET["type"]!=="tout") {
        if($_GET["type"] === "chiens") {
            afficherAnimauxParType($tableauxDAnimaux,"chien");
        } else if ($_GET["type"] === "chats") {
            afficherAnimauxParType($tableauxDAnimaux,"chat");
        } else {
            afficherAnimaux($tableauxDAnimaux);
        }
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


