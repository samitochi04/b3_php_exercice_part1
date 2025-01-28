<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */

class ShoppingCart {
    public $items;
    public $total;

    public function __construct() {
        $this->items = [];
        $this->total = 0;
    }

    public function addItem($name, $price) {
        $this->items[] = [
            "name" => $name,
            "price" => $price
        ];
        $this->calculateTotal();
    }

    public function displayItems() {
        if (empty($this->items)) {
            echo "Le panier est vide.\n";
        } else {
            echo "Articles dans le panier :<br><br>\n";
            foreach ($this->items as $item) {
                echo "---> " . $item["name"] . ": " . number_format($item["price"], 2) . " €<br><br>\n";
            }
        }
    }

    public function calculateTotal() {
        $this->total = 0;
        foreach ($this->items as $item) {
            $this->total += $item["price"];
        }
    }

    public function displayTotal() {
        echo "Coût total : " . number_format($this->total, 2) . " €<br><br>\n";
    }
}

$cart = new ShoppingCart();

$cart->addItem("Livre", 12.99);
$cart->addItem("Stylo", 1.50);
$cart->addItem("Cahier", 4.75);

$cart->displayItems();

$cart->displayTotal();

