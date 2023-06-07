<?php

namespace Interface;

interface IProduct
{
    public function valorisationStock();

    public function getHTPrice();

    public function getTTCPrice();

    public function displayProduct();

    public static function cloneProduct($newProduct, $cloneName);
}
