<?php

include_once __DIR__.'/Product.php';

class PetsBed extends Product
{
    public $width, $lenght , $material;

    public function __construct(string $name, int $price, string $img, int $vote, Category $category,  int $width, int $lenght , string $material ){

        parent::__construct($name,$price,$img, $vote, $category);

        $this->width = $width;
        $this->lenght = $lenght;
        $this->material = $material;
        $this->category = $category;


    }
}

