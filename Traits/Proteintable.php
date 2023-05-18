<?php 

trait Proteintable {
    protected $protein;
    

    public function getProtein(){
        return $this->protein;
    }

    public function setProtein($protein, $unit){
        
        if(!is_int($protein)){
            throw new Exception('protein non é settato');
        } 
        return $this->protein = $protein . $unit;
        
    }
}




/* 
if($this->protein) {
    return $this->protein;
} else {
    throw new Exception('protein non é settato') ;
} */