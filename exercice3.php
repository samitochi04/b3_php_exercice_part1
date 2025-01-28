<?php

/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
 */

require_once 'exercice2.php';

class Employee extends Person
{
    protected float $salary;
    protected string $position;

    public function __construct(string $first_name, string $last_name, int $age, float $salary, string $position)
    {
        parent::__construct($first_name, $last_name, $age);

        $this->salary = $salary;
        $this->position = $position;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    public function afficheInfos(): string
    {
        return "
            <div class='bg-white shadow-md rounded-lg p-6 max-w-sm mx-auto mt-10'>
                <h2 class='text-xl font-bold mb-4'>Informations de l'employé</h2>
                <p class='text-gray-700'><span class='font-semibold'>Prénom:</span> {$this->getFirstName()}</p>
                <p class='text-gray-700'><span class='font-semibold'>Nom:</span> {$this->getLastName()}</p>
                <p class='text-gray-700'><span class='font-semibold'>Âge:</span> {$this->getAge()} ans</p>
                <p class='text-gray-700'><span class='font-semibold'>Salaire:</span> {$this->salary} €</p>
                <p class='text-gray-700'><span class='font-semibold'>Poste:</span> {$this->position}</p>
            </div>
        ";
    }
}

// Instanciation d'un objet Employee
$employee = new Employee("Samuel", "FOTSO", 20, 7500.50, "Ingénieure logiciel");

// Affichage des informations avec un design HTML + Tailwind CSS
echo "
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Informations de l'employé</title>
    <script src='https://cdn.tailwindcss.com'></script>
</head>
<body class='bg-gray-100'>
    {$employee->afficheInfos()}
</body>
</html>
";
