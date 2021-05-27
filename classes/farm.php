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

    // Получаем продукты от животных находящехся в barn и помещаем их в $products
    public function setProducts()
    {
        foreach ($this->barn->getContent() as $animal) {
            foreach ($animal->getProducts() as $key => $value) {
                if (isset($this->products[$key])) {
                    $this->products[$key] += $value;
                } else {
                    $this->products[$key] = $value;
                }
            }
        }
    }
    //Выводим текущие значения $products
    public function displayProducts()
    {
        foreach ($this->products as $key => $value) {
            echo $key . ' = ' . $value . '<br>';
        }
    }

    //Добавляем Id животных из barn в миссив $animalIds
    public function setAnimalIds()
    {
        foreach ($this->barn->getContent() as $animal) {
            $this->animalIds[] = $animal->getId();
        };
    }
}
