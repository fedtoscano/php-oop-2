<?php
class Game{
    private $title;
    private $price;
    private $description;
    private $size;

    //! GETTER
    protected function getTitle(){
        return $this->title;
    }
    protected function getPrice(){
        return $this->price;
    }
    protected function getDescription(){
        return $this->description;
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
    protected function setDescription($description){
        $this->description = $description;
    }
    protected function setSize($size){
        $this->size = $size;
    }

        //! CONSTRUCT
        public function __construct($title, $price, $description, $size)
        {
            $this->title = $title;
            $this->price = $price;
            $this->description = $description;
            $this->size = $size;
        }
}