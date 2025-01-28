<?php

/**
 * ÉNONCÉ:
 * Créez une classe Student qui étend Person et ayant pour propriétés 
 * - grades (tableau de notes).
 * Ajoutez une méthode getAverage() qui retourne la moyenne des notes. 
 * Implémentez les getters et setters pour manipuler le tableau de notes.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */

 require_once 'exercice2.php'; 
 
 class Student extends Person {
     private array $grades;
 
     public function __construct(string $first_name, string $last_name, int $age, array $grades = []) {
         parent::__construct($first_name, $last_name, $age);
         $this->grades = $grades;
     }
 
     public function getGrades(): array {
         return $this->grades;
     }
 
     public function setGrades(array $grades): void {
         $this->grades = $grades;
     }
 
     public function getAverage(): float {
         if (empty($this->grades)) {
             return 0;
         }
         return array_sum($this->grades) / count($this->grades);
     }
 
     public function afficheInfosEtudiant(): string {
         $average = number_format($this->getAverage(), 2);
         $gradesList = implode(', ', $this->grades);
         return "
             <div class='bg-white shadow-md rounded-lg p-6 max-w-sm mx-auto mt-10'>
                 <h2 class='text-xl font-bold mb-4'>Informations de l'étudiant</h2>
                 <p class='text-gray-700'><span class='font-semibold'>Prénom:</span> {$this->first_name}</p>
                 <p class='text-gray-700'><span class='font-semibold'>Nom:</span> {$this->last_name}</p>
                 <p class='text-gray-700'><span class='font-semibold'>Âge:</span> {$this->age} ans</p>
                 <p class='text-gray-700'><span class='font-semibold'>Notes:</span> {$gradesList}</p>
                 <p class='text-gray-700'><span class='font-semibold'>Moyenne:</span> {$average}</p>
             </div>
         ";
     }
 }
 
 // Création d'un objet Student
 $student = new Student("Samuel", "FOTSO", 20, [15, 17, 20, 18]);
 
 // Affichage des informations avec un design HTML + Tailwind CSS
 echo "
 <!DOCTYPE html>
 <html lang='fr'>
 <head>
     <meta charset='UTF-8'>
     <meta name='viewport' content='width=device-width, initial-scale=1.0'>
     <title>Informations de l'étudiant</title>
     <script src='https://cdn.tailwindcss.com'></script>
 </head>
 <body class='bg-gray-100'>
     {$student->afficheInfosEtudiant()}
 </body>
 </html>
 ";
 