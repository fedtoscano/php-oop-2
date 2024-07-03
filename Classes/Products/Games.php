<?php
require_once __DIR__."/../Product.php";

class Game extends Product{
    private $description;
    private $size;

    //! GETTER
    protected function getDescription(){
        return $this->description;
    }
    protected function getSize(){
        return $this->size;
    }
                                                        
    //! SETTER
    protected function setDescription($description){
        $this->description = $description;
    }
    protected function setSize($size){
        $this->size = $size;
    }

    //! CONSTRUCTOR
    public function __construct($title, $price, $imgUrl, $category, $description, $size)
    {
        parent::__construct($title, $price, $imgUrl, $category);
        $this-> description = $description;
        $this-> size = $size;
    }
}