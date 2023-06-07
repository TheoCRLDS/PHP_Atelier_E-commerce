<?php

namespace Models\Virtuel;

class Product
{
    protected $HTPrice;
    public $TVA;
    protected $TTCPrice;
    public $nom;
    public $categorie;
    public $description;

    public function __construct($HTPrice, $TVA, $nom, $categorie, $description)
    {
        $this->HTPrice = $HTPrice;
        $this->TVA = $TVA;
        $this->nom = $nom;
        $this->categorie = $categorie;
        $this->description = $description;
    }

    public function getHTPrice()
    {
        if ($this->HTPrice >= 0) {
            $this->HTPrice = $this->HTPrice;
            return " <p>Prix HT : " . number_format($this->HTPrice, 2) . "€ </p>";
        } else {
            echo "<p> Your HT price can't be lower than 0€ </p>";
        }
    }

    public function getTTCPrice()
    {
        if ($this->HTPrice >= 0) {
            $this->TTCPrice = $this->HTPrice * (1 + ($this->TVA / 100));
            return "<p> Prix TTC : " . number_format($this->TTCPrice, 2) . "€ </p>";
        } else {
            echo "<p> Your TTC price can't be lower than 0€ </p>";
        }
    }

    public function displayProduct()
    {
        echo "<h2>" . $this->nom . "</h2>";
        echo "<p> Catégorie : " . $this->categorie . "</p>";
        echo "<p> Description : " . $this->description . "</p>";
        echo $this->getHTPrice();
        echo "<p> TVA : " . $this->TVA . "%</p>";
        echo $this->getTTCPrice();
    }
}
