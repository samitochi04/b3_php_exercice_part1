<?php 

/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/


class BankAccount {
    public $balance;

    public function __construct($initialBalance = 0) {
        $this->balance = $initialBalance;
        echo "Compte créé avec un solde initial de " . number_format($this->balance, 2) . " €.<br><br>\n";
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Vous avez déposé " . number_format($amount, 2) . " €. Solde actuel : " . number_format($this->balance, 2) . " €.\n";
        } else {
            echo "Le montant du dépôt doit être positif.<br><br>\n";
        }
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
            echo "Fonds insuffisants pour retirer " . number_format($amount, 2) . " €. Solde actuel : " . number_format($this->balance, 2) . " €.<br><br>\n";
        } elseif ($amount > 0) {
            $this->balance -= $amount;
            echo "Vous avez retiré " . number_format($amount, 2) . " €. Solde actuel : " . number_format($this->balance, 2) . " €.<br><br>\n";
        } else {
            echo "Le montant du retrait doit être positif.\n";
        }
    }
}

$compte = new BankAccount(100);

$compte->deposit(50); 

$compte->withdraw(30);

$compte->withdraw(150);

$compte->deposit(-20);

$compte->withdraw(-10);

