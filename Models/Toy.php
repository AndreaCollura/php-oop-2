<?php

include_once __DIR__.'/Product.php';

class Toy extends Product
{
    public $dims, $sound ;

    public function __construct(string $name, int $price, string $img, int $vote, int $dims, string $sound){

        parent::__construct($name,$price,$img, $vote);

        $this->dims = $dims;
        $this->sound = $sound;


    }
}

