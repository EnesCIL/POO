🖥️ **Exercice POO en PHP – Classe Ordinateur**
🎯 **Objectif**

**Cet exercice a pour but de comprendre les bases de la programmation orientée objet (POO) en PHP en créant une classe Ordinateur. L’objectif est de se familiariser avec :**

- Les classes et objets

- Les propriétés privées

- Les constructeurs

- es getters et setters

- Les méthodes publiques

🏗️ **Contenu et explications**

✔️** Classe Ordinateur**

Définition d’une classe : un modèle qui sert à créer des objets partageant les mêmes caractéristiques et comportements.

**Propriétés privées (private) :**

- _marque → contient la marque de l’ordinateur

- _modele → contient le modèle spécifique

- _ecran → informations sur l’écran

- _statut → état de l’ordinateur (allumé ou éteint)

- _cpuClock → fréquence du processeur

Les attributs privés ne sont accessibles que depuis la classe elle-même, ce qui permet de protéger les données de l’objet.

- Constructeur (__construct) :
Initialise automatiquement les propriétés de l’objet lors de sa création.
Permet de donner une valeur initiale à des propriétés comme la marque ou la fréquence du processeur.

- Getters :
Méthodes publiques permettant de récupérer la valeur des propriétés privées (ex : getMarque(), getCpuClock()).

- Setters :
Méthodes publiques permettant de modifier les propriétés privées (ex : setCpuClock($speed)).

- Méthodes publiques :

 - allumer() → modifie l’état de l’ordinateur (_statut) pour le passer de éteint à allumé.

Les méthodes publiques peuvent être appelées depuis l’extérieur de la classe sur les objets créés.

- $this :
Représente l’objet courant, utilisé pour accéder aux propriétés ou méthodes de l’objet à l’intérieur de sa classe.

📚 **Concepts POO abordés**

- Encapsulation avec les propriétés privées

- Initialisation d’objets via le constructeur

- Accès et modification des données avec getters et setters

- Méthodes publiques pour interagir avec l’objet

- Utilisation de $this pour référencer l’objet courant
