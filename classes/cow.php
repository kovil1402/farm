<?php

class Cow implements Animal
{

    public function __construct()
    {
        $this->id = $this->setId();
    }

    public $id;

    public function getProducts()
    {
        $product_amount = mt_rand(8, 12);
        $output = ['milk' => "$product_amount"];
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
