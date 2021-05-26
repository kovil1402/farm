<?php
class Farm
{
    public function __construct($barn)
    {
        $this->barn = $barn;
        $this->setAnimalIds();
        $this->setProducts();
    }
    private $animalIds = [];

    private $products = [];


    public function setProducts()
    {
        foreach ($this->barn->getAnimals() as $animal) {
            foreach ($animal->getProducts() as $key => $value) {
                if (isset($this->products[$key])) {
                    $this->products[$key] += $value;
                } else {
                    $this->products[$key] = $value;
                }
            }
        }
    }

    public function displayProducts()
    {
        foreach ($this->products as $key => $value) {
            echo $key . ' = ' . $value . '<br>';
        }
    }


    public function setAnimalIds()
    {
        foreach ($this->barn->getAnimals() as $animal) {
            $this->animalIds[] = $animal->getId();
        };
    }
}
