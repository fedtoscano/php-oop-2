<?php
class Product{
    private $title;
    private $price;
    private $imgUrl;
    private $category;

    //! GETTER
    public function getTitle(){
        return $this->title;
    }
    public function getPrice(){
        return $this->price;
    }  
    public function getCategory(){
        return $this->category;
    }
    public function getImgUrl(){
        return $this->imgUrl;
    }

    //! SETTER
    protected function setTitle($title){
        $this->title = $title;
    }
    protected function setPrice($price){
        $this->price = $price;
    }
    protected function setCategory($category){
        $this->category = $category;
    }
    protected function setImgUrl($imgUrl){
        $this->imgUrl = $imgUrl;
    }

    //! CONSTRUCT
    public function __construct($title, $price, $imgUrl, $category)
    {
        $this->title = $title;
        $this->price = $price;
        $this->imgUrl = $imgUrl;
        $this->category = $category;
    }
}