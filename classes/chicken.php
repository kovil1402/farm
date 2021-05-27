<?php

namespace Farm;

class Chicken extends Animal
{

    private $id;

    private $productType = 'eggs';

    public function getProducts()
    {
        $output = mt_rand(0, 1);

        return $output;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getProductType()
    {
        return $this->productType;
    }
}
