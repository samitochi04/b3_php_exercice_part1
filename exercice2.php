<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée Person avec des propriétés first_name, last_name et age en protected.
 * Ajouter un conctructeur
 * Ajouter les getters et setters
 * Implémentez une methode afficheInfos() pour afficher les informations de la personne.
 * Créer un nouvel objet et afficher les information
 */

class Person
{
    protected string $first_name;
    protected string $last_name;
    protected int $age;

    public function __construct(string $first_name, string $last_name, int $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function getLastName(): string
    {
        return $this->last_name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    // Méthode pour afficher les informations
    public function afficheInfos(): string
    {
        return "
            <div class='bg-white shadow-md rounded-lg p-6 max-w-sm mx-auto mt-10'>
                <h2 class='text-xl font-bold mb-4'>Informations de la personne</h2>
                <p class='text-gray-700'><span class='font-semibold'>Prénom:</span> {$this->first_name}</p>
                <p class='text-gray-700'><span class='font-semibold'>Nom:</span> {$this->last_name}</p>
                <p class='text-gray-700'><span class='font-semibold'>Âge:</span> {$this->age} ans</p>
            </div>
        ";
    }
}

// Instanciation d'un objet Person
$person = new Person("Php", "Elephant", 32);

// Affichage des informations avec un design HTML + Tailwind CSS
echo "
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Informations de la personne</title>
    <script src='https://cdn.tailwindcss.com'></script>
</head>
<body class='bg-gray-100'>
    {$person->afficheInfos()}
</body>
</html>
";
