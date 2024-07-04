<?php
require_once __DIR__."/../Product.php";
require_once __DIR__."/../Traits/HasSize.php";

class Game extends Product{
    use HasSize;
    private $description;

    //! GETTER
    public function getDescription(){
        return $this->description;
    }
    //! SETTER
    protected function setDescription($description){
        $this->description = $description;
    }
    //! CONSTRUCTOR
    public function __construct($title, $price, $imgUrl, $category, $description, $size)
    {
        parent::__construct($title, $price, $imgUrl, $category);
        $this-> description = $description;
        $this-> size = $size;
    }
}