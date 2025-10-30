<?php 

Class Ordinateur {
    # Déclaration d’une classe nommée "Ordinateur"

    private $_marque;
    # Attribut privé : contient la marque de l’ordinateur (ex : "Dell", "HP", "Samsung")

    private $_modele;
    # Attribut privé : contient le modèle spécifique de l’ordinateur

    private $_ecran;
    # Attribut privé : contient les informations relatives à l’écran (taille, type…)

    private $_statut = 0;
    # Attribut privé : indique si l’ordinateur est allumé ou éteint
    # 0 = éteint (valeur par défaut), 1 = allumé

    public function allumer() {
        # Méthode publique qui permet d’allumer l’ordinateur
        $this->_statut = 1;
        # "$this" fait référence à l’objet actuel
        # On modifie donc l’attribut _statut de cet objet pour indiquer qu’il est allumé
    }
}

$poste = new Ordinateur();
# Création (instanciation) d’un objet de la classe Ordinateur
# Cet objet est stocké dans la variable $poste

$poste->allumer();
# Appel de la méthode "allumer()" de l’objet $poste
# L’ordinateur passe de l’état éteint (0) à l’état allumé (1)
?>
<!-- Definir poo = La programmation orientée objet est une façon d’organiser le code autour d’objets qui possèdent des propriétés et des actions.
definir une class = Une classe est un modèle qui sert à créer des objets partageant les mêmes caractéristiques et comportements.
pourquoi private = Le mot-clé private rend un attribut ou une méthode accessible uniquement à l’intérieur de la classe.
pourquoi la fonction est public = Le mot-clé public rend une méthode ou un attribut accessible depuis n’importe où dans le programme
que signifie $this = La variable $this représente l’objet en cours, c’est-à-dire lui-même à l’intérieur de sa classe -->

<?php 
# Début du code PHP

Class Ordinateur {
    # Déclaration de la classe "Ordinateur"

    private $_marque;
    # Attribut privé qui contiendra la marque de l’ordinateur

    public function __construct($marque) {
        # Méthode magique "__construct" = constructeur de la classe
        # Elle est automatiquement exécutée lors de la création d’un nouvel objet

        $this->_marque = $marque;
        # On affecte à l’attribut _marque la valeur passée en paramètre
    }
}

$poste = new Ordinateur("Samsung");
# Création d’un nouvel objet Ordinateur avec "Samsung" comme marque
# Le constructeur initialise automatiquement $_marque = "Samsung"
?>

<?php 
# Début du code PHP

Class Ordinateur {
    # Déclaration de la classe "Ordinateur"

    private $_marque;
    # Attribut privé : contient la marque de l’ordinateur

    public function __construct($marque) {
        # Constructeur : initialise la marque de l’ordinateur à sa création
        $this->_marque = $marque;
    }

    public function getMarque() {
        # Méthode publique appelée accesseur ou getter
        # Permet d’accéder à la valeur de l’attribut privé $_marque
        return $this->_marque;
        # Retourne la marque de l’ordinateur
    }
}


$poste = new Ordinateur("Samsung");
# Création d’un objet Ordinateur avec la marque "Samsung"

echo $poste->getMarque();
# Appel du getter getMarque() pour afficher la marque
# Affichera : "Samsung"
?>

<?php 

Class Ordinateur {

    private $_marque;
    # Attribut privé : contient la marque de l’ordinateur

    private $_cpuClock;
    # Attribut privé : contient la fréquence du processeur (en GHz)

    public function __construct($marque, $cpuClock) {
        # Constructeur : initialise la marque et la fréquence du processeur
        $this->_marque = $marque;
        $this->_cpuClock = $cpuClock;
    }

    public function getMarque() {
        # Getter : retourne la marque de l’ordinateur
        return $this->_marque;
    }

    public function getCpuClock() {
        # Getter : retourne la vitesse du processeur (en GHz)
        return $this->_cpuClock;
    }

    public function setCpuClock($speed) {
        # Setter : permet de modifier la vitesse du processeur
        $this->_cpuClock = $speed;
        # Met à jour la valeur de l’attribut _cpuClock avec la nouvelle vitesse
    }
}

# Création d’un objet Ordinateur avec une marque et une fréquence initiale
$poste = new Ordinateur("Samsung", 2.4);
# $_marque = "Samsung", $_cpuClock = 2.4 GHz

$poste->setCpuClock(3);
# Modification de la fréquence du processeur via le setter
# $_cpuClock devient 3 GHz

echo $poste->getCpuClock()." GHz";
# Appel du getter pour récupérer la nouvelle fréquence
# Affichera : "3 GHz"
?>



