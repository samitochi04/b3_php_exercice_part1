<?php
/*
 * ÉNONCÉ :
 * Créer Product avec les propriétés suivantes en protected
 * - name
 * - price_without_tax
 * - vat_rate
 * Ajouter les getters et setters
 * Ajouter une methode getPriceWithVat() qui va retourner le calcul du prix TTC
 * En dessous la classe instancier un produit et afficher les infos
*/
class Product
{
    public function __construct(
        protected string $name,
        protected int $price_without_tax,
        protected int $vat_rate,
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getPriceWithoutTax(): int
    {
        return $this->price_without_tax;
    }

    public function getVatRate(): int
    {
        return $this->vat_rate;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    // Pour calculer le prix Haut Taxes
    public function setPriceWithoutTax(int $price_without_tax): void
    {
        $this->price_without_tax = $price_without_tax;
    }

    public function setVatRate(int $vat_rate): void
    {
        $this->vat_rate = $vat_rate;
    }

    public function getPriceWithVat(): float
    {
        return $this->price_without_tax * (1 + $this->vat_rate / 100);
    }
}


$product = new Product("Laptop", 1000, 20);

// Affichage des informations du produit
echo "Nom du produit: " . $product->getName() . "<br><br>\n";
echo "Prix HT: " . $product->getPriceWithoutTax() . " €<br><br>\n";
echo "Taux de TVA: " . $product->getVatRate() . "%<br><br>\n";
echo "Prix TTC: " . $product->getPriceWithVat() . " €<br>\n";
