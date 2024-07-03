<?php
require_once __DIR__."/../Product.php";

class Game extends Product{
    private $description;
    private $size;

    //! GETTER
    public function getDescription(){
        return $this->description;
    }
    public function getSize(){
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