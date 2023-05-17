<?php 


class Product
{
    
    
    public $name, 

    $price, 

    $img, 

    $vote;

    public function __construct(string $name, int $price, string $img, int $vote)
    {
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->vote = $vote;
    }


}




/* 
$products = new Products();

/* var_dump($products); */ 