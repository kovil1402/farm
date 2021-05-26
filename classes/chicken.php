<?php

class Chicken implements Animal
{

    public function __construct()
    {
        $this->id = $this->setId();
    }

    public $id;

    public function getProducts()
    {
        $product_amount = mt_rand(0, 1);
        $output = ["egg" => "$product_amount"];
        return $output;
    }

    public function setId()
    {
        return uniqid('id_', true);
    }
    public function getId()
    {
        return $this->id;
    }
}
