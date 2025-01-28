<?php

/**
 * ÉNONCÉ:
 * Refactoriser le code ci-dessous en créant une classe Statistics
 */

 class Statistics
 {
     private array $numbers;

     public function __construct(array $numbers)
     {
         $this->numbers = $numbers;
     }

     public function getSum(): float
     {
         return array_sum($this->numbers);
     }

     public function getAverage(): float
     {
         if (count($this->numbers) === 0) {
             return 0;
         }
         return $this->getSum() / count($this->numbers);
     }
 
     public function getMin(): float
     {
         if (count($this->numbers) === 0) {
             return 0;
         }
         return min($this->numbers);
     }
 
     public function getMax(): float
     {
         if (count($this->numbers) === 0) {
             return 0;
         }
         return max($this->numbers);
     }
 }
 
 $numbers = [10, 5, 8, 20, 3, 15];
 $stats = new Statistics($numbers);
 
 echo "Tableau de nombres : " . implode(", ", $numbers) . "<br><br>";
 echo "Somme : " . $stats->getSum() . "<br><br>";
 echo "Moyenne : " . $stats->getAverage() . "<br><br>";
 echo "Valeur minimale : " . $stats->getMin() . "<br><br>";
 echo "Valeur maximale : " . $stats->getMax() . "<br><br>";
 
