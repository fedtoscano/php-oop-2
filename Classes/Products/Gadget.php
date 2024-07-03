<?php
require_once __DIR__."/../Product.php";

class Gadget extends Product{

    private $material;
    private $size;

    //! GETTER
    public function getMaterial(){
        return $this->material;
    }
    public function getSize(){
        return $this->size;
    }
                                                        
    //! SETTER

    protected function setMaterial($material){
        $this->material = $material;
    }
    protected function setSize($size){
        $this->size = $size;
    }

    //! CONSTRUCTOR
    public function __construct($title, $price, $imgUrl, $category, $material, $size)
    {
        parent::__construct($title, $price, $imgUrl, $category);
        $this-> material = $material;
        $this-> size = $size;
    }
}