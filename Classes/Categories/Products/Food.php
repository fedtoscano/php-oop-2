<?php
class Food{
    private $title;
    private $price;
    private $weight;
    private $ingredients;

    //! GETTER
    protected function getTitle(){
        return $this->title;
    }
    protected function getPrice(){
        return $this->price;
    }
    protected function getWeight(){
        return $this->weight;
    }
    protected function getIngredients(){
        return $this->ingredients;
    }
                                                        
    //! SETTER
    protected function setTitle($title){
        $this->title = $title;
    }
    protected function setPrice($price){
        $this->price = $price;
    }
    protected function setWeight($weight){
        $this->weight = $weight;
    }
    protected function setIngredients($ingredients){
        $this->ingredients = $ingredients;
    }

    //! CONSTRUCTOR
    public function __construct($title, $price, $weight, ...$ingredients)
    {
        $this-> title = $title;
        $this-> price = $price;
        $this-> weight = $weight;
        $this-> ingredients = $ingredients;
    }
}