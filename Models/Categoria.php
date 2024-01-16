<?php

class Categoria
{
    public $product;

    public function __construct($product)
    {
        $this->product = $product;
    }

    public function getProduct()
    {
        $result = $this->product;
        return $result;
    }
}