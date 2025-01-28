<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */

class Math {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function subtract($a, $b) {
        return $a - $b;
    }

    public static function multiply($a, $b) {
        return $a * $b;
    }
}

$addition = Math::add(1063, 74);
$soustraction = Math::subtract(138, 59);
$multiplication = Math::multiply(297, 5);

echo "Addition (1063 + 74) : " . $addition . "<br><br>\n";
echo "Soustraction (138 - 59) : " . $soustraction . "<br><br>\n";
echo "Multiplication (297 * 5) : " . $multiplication . "\n";

