<?php
// Author: Mohammad Javad Hossein Pour
// Copyright: 2017, MIT
// This project is part of my quick start in PHP behat.

final class Shelf
{
    private $priceMap = array();

    public function setProductPrice($product, $price)
    {
        $this->priceMap[$product] = $price;
    }

    public function getProductPrice($product)
    {
        return $this->priceMap[$product];
    }
}