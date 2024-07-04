<?php

trait HasSize{
    private $size;

    //! GETTER
    public function getSize(){
        return $this-> size;
    }

    //! SETTER
    public function setSize($size){
        $this->size = $size;
    }
}