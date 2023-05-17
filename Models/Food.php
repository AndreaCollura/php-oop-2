<?php

include_once __DIR__.'/Product.php';

class Food extends Product
{
    public $type, $calories , $weight;

    public function __construct(string $name, int $price, string $img, int $vote, string $type, int $calories , int $weight ){

        parent::__construct($name,$price,$img, $vote);

        $this->type = $type;
        $this->calories = $calories;
        $this->weight = $weight;


    }
}



/* $products = new Products();

var_dump($products);

$foods = new Foods();

var_dump($foods);

 */