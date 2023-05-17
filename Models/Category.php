<?php



class Category
{
    public $animalCateg;

    public $icon;

    public function __construct( string $animalCateg){

        $this->animalCateg = $animalCateg;

        if($animalCateg == 'dog'){

            $this->icon = '<i class="fa-solid fa-dog"></i>';


        }else {
            $this->icon = '<i class="fa-solid fa-cat"></i>';
        }
        
    }
}

