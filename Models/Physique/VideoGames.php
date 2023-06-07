<?php

namespace Models\Physique;

require_once __DIR__ . "/Product.php";

class VideoGames extends Product
{
    protected string $type;
    protected int $age;
    protected int $ageMini;
    protected float $note;

    public function __construct($HTPrice, $nom, $categorie, $stock, $description, $type, $age, $ageMini, $note)
    {
        parent::__construct($HTPrice, 20, $nom, $categorie, $stock, $description);
        $this->type = $type;
        $this->age = $age;
        $this->ageMini = $ageMini;
        $this->note = $note;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getAgeMini()
    {
        return $this->ageMini;
    }

    public function checkAge()
    {
        if ($this->age >= $this->ageMini) {
            echo "<p>Vous pouvez jouer à ce jeu 😁</p>";
        } else {
            echo "<p>Vous êtes trop jeune pour jouer à ce jeu 😢</p>";
        }
    }

    public function displayProduct()
    {
        parent::displayProduct();
        echo "<p> Type : " . $this->type . "</p>";
        echo "<p> PEGI " . $this->ageMini . "</p>";
        echo "<p> Note : " . $this->note . "/20</p>";
    }
}
