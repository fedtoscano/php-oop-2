<?php
require_once __DIR__."/../Product.php";
class Food extends Product{
    private $weight;
    private $ingredients;

    
    protected function getWeight(){
        return $this->weight;
    }
    protected function getIngredients(){
        return $this->ingredients;
    }
    protected function setWeight($weight){
        $this->weight = $weight;
    }
    protected function setIngredients($ingredients){
        $this->ingredients = $ingredients;
    }

    //! CONSTRUCTOR
    public function __construct($title, $price, $imgUrl, $category, $weight, ...$ingredients)
    {
        parent::__construct($title, $price, $imgUrl, $category);
        $this-> weight = $weight;
        $this-> ingredients = $ingredients;
    }
}