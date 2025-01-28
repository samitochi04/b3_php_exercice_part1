<?php

/**
 * ÉNONCÉ:
 * Créez une classe Movie avec les propriétés 
 * title, genre et ageRestriction. 
 * Ajoutez une méthode canWatch($viewerAge) qui retourne true 
 * si l’âge du spectateur ($viewerAge) est supérieur ou égal à ageRestriction, 
 * sinon false.
  * En dessous de la classe, créer un objet et appeler les méthodes
 */

class Movie {
    public $title;
    public $genre;
    public $ageRestriction;

    public function __construct($title, $genre, $ageRestriction) {
        $this->title = $title;
        $this->genre = $genre;
        $this->ageRestriction = $ageRestriction;
    }

    public function canWatch($viewerAge) {
        if ($viewerAge >= $this->ageRestriction) {
            return true;
        }
        return false;
    }
}

$film = new Movie("Inception", "Science-fiction", 13);

$age1 = 15;
$age2 = 10;

echo "Film : " . $film->title . " (" . $film->genre . ")<br><br>\n";
echo "Restriction d'âge : " . $film->ageRestriction . " ans<br><br>\n";

if ($film->canWatch($age1)) {
    echo "Le spectateur de $age1 ans peut regarder le film.<br><br>\n";
} else {
    echo "Le spectateur de $age1 ans ne peut pas regarder le film.<br><br>\n";
}

if ($film->canWatch($age2)) {
    echo "Le spectateur de $age2 ans peut regarder le film.<br><br>\n";
} else {
    echo "Le spectateur de $age2 ans ne peut pas regarder le film.<br><br>\n";
}

