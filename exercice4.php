<?php

/**
 * ÉNONCÉ
 * Créez une classe Article ayant les propriétés 
 * title (titre)
 * content (contenu)
 * Implémentez une méthode getSummary($maxLength) qui retourne les premiers $maxLength caractères 
 * du contenu, suivis de « … » si le contenu est trop long.
 * En dessous la classe instancier un objet et afficher les infos

 */

class Article {
    public $title;
    public $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function getSummary($maxLength) {
        if (strlen($this->content) > $maxLength) {
            return substr($this->content, 0, $maxLength) . "…";
        }
        return $this->content;
    }

    public function displayInfo() {
        echo "Titre : " . $this->title . "<br><br>\n";
        echo "Résumé : " . $this->getSummary(72) . "<br><br>\n"; // 72 caractères maximum
    }
}

$article = new Article(
    "Introduction à PHP",
    "PHP est un langage de programmation côté serveur principalement utilisé pour développer des applications web dynamiques."
);

$article->displayInfo();


