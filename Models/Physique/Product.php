<?php

namespace Models\Physique;

include_once __DIR__ . "\..\..\Interfaces\IProduct.php";

use  Interface\IProduct as IProduct;

abstract class Product implements IProduct
{
    protected $HTPrice;
    public $TVA;
    protected $TTCPrice;
    public $nom;
    public $categorie;
    public $stock;
    public $description;

    public function __construct($HTPrice, $TVA, $nom, $categorie, $stock, $description)
    {
        $this->HTPrice = $HTPrice;
        $this->TVA = $TVA;
        $this->nom = $nom;
        $this->categorie = $categorie;
        $this->stock = $stock;
        $this->description = $description;
    }

    public function valorisationStock()
    {
        if ($this->HTPrice >= 0 && $this->stock > 0) {
            return "<p> Valorisation Stock : " . $this->stock * $this->HTPrice . "€ </p>";
        } else {
            echo "<p> Your stock value can't be lower than 0€ </p>";
        }
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
        echo "<p> Stock : " . $this->stock . "</p>";
        echo $this->valorisationStock();
    }

    public static function cloneProduct($newProduct, $cloneName)
    {
        return new Product(
            $newProduct->HTPrice,
            $newProduct->TVA,
            $cloneName,
            $newProduct->categorie,
            $newProduct->stock,
            null
        );
    }
}
