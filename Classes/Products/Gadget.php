<?php
require_once __DIR__."/../Product.php";
require_once __DIR__."/../Traits/HasSize.php";

class Gadget extends Product{
    use HasSize;
    private $material;

    //! GETTER
    public function getMaterial(){
        return $this->material;
    }
    //! SETTER
    protected function setMaterial($material){
        $this->material = $material;
    }
    //! CONSTRUCTOR
    public function __construct($title, $price, $imgUrl, $category, $material, $size)
    {
        parent::__construct($title, $price, $imgUrl, $category);
        $this-> material = $material;
        $this-> size = $size;
    }
}