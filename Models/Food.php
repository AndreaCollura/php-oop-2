<?php

include_once __DIR__.'/Product.php';
include_once __DIR__.'/../Traits/Proteintable.php';

class Food extends Product
{
    use Proteintable;

    public $type, $calories , $weight;

    public function __construct(string $name, int $price, string $img, int $vote, Category $category, string $type, int $calories , int $weight,){

        parent::__construct($name,$price,$img, $vote , $category);

        $this->type = $type;
        $this->calories = $calories;
        $this->weight = $weight;
        $this->category = $category;


    }
}



/* $products = new Products();

var_dump($products);

$foods = new Foods();

var_dump($foods);

 */