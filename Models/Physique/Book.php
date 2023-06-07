<?php

namespace Models\Physique;

require_once __DIR__ . "/Product.php";

class Book extends Product
{
    protected string $author;
    protected string $format;

    public function __construct($HTPrice, $nom, $categorie, $stock, $description, $author, $format)
    {
        parent::__construct($HTPrice, 5.5, $nom, $categorie, $stock, $description);
        $this->author = $author;
        $this->format = $format;
    }

    public function displayBook()
    {
        // echo "<h2>" . $this->nom . "</h2>";
        echo "<p> Author : " . $this->author . "</p>";
        echo "<p> Résumé : " . $this->description . "</p>";
    }

    public function displayProduct()
    {
        parent::displayProduct();
        $this->displayBook();
    }
}
