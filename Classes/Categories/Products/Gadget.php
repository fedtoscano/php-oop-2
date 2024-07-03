<?php
class Gadget{
    private $title;
    private $price;
    private $material;
    private $size;

    //! GETTER
    protected function getTitle(){
        return $this->title;
    }
    protected function getPrice(){
        return $this->price;
    }
    protected function getMaterial(){
        return $this->material;
    }
    protected function getSize(){
        return $this->size;
    }
                                                        
    //! SETTER
    protected function setTitle($title){
        $this->title = $title;
    }
    protected function setPrice($price){
        $this->price = $price;
    }
    protected function setMaterial($material){
        $this->material = $material;
    }
    protected function setSize($size){
        $this->size = $size;
    }

    //! CONSTRUCT
    public function __construct($title, $price, $material, $size)
    {
        $this->title = $title;
        $this->price = $price;
        $this->material = $material;
        $this->size = $size;
    }
}