<?php

namespace Farm;

class Cow extends Animal
{
    private $id;

    private $productType = 'milk';

    public function getProducts()
    {
        $output = mt_rand(8, 12);

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
