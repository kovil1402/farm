<?php

namespace Farm;

abstract class Animal
{
    private $id;
    public abstract function getProducts();
    public abstract function setId($id);
    public abstract function getId();
}
