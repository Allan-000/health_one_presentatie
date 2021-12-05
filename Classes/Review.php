<?php

class Review
{
    public $id;
    public $rating;
    public $description;
    public $product_id;

    public function __constructor(){
        settype($this->id,'integer');
        setType($this->product_id,'integer');
    }
}