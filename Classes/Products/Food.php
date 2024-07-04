<?php
require_once __DIR__."/../Product.php";

class Food extends Product{
    private $weight;
    private $ingredients;

    //! GETTER
    public function getWeight(){
        return $this->weight;
    }
    public function getIngredients(){
        return $this->ingredients;
    }

    //!SETTER
    public function setWeight($weight){
        $this->weight = $weight;
    }
    public function setIngredients($ingredients){
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