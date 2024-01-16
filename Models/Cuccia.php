<?php

require_once __DIR__ . '/Prodotto.php';
class Cuccia extends Prodotto
{
    public $color;
    public $description;

    public function __construct($image, $title, $price, Categoria $category, $color, $description)
    {
        parent::__construct($image, $title, $price, $category);
        $this->color = $color;
        $this->description = $description;
    }
}