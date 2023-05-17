<?php 

include __DIR__.'/Category.php';

class Product
{
    
    
    public $name, 

    $price, 

    $img, 

    $vote,
    
    $category;

    public function __construct(string $name, int $price, string $img, int $vote, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->vote = $vote;
        $this->category = $category;
    }


}




/* 
$products = new Products();

/* var_dump($products); */ 