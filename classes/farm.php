<?php

namespace Farm;


class Farm
{
    public function __construct($barn)
    {
        $this->barn = $barn;
    }
    public function createId()
    {
        return uniqid('id_', true);
    }

    public function processObject($object)
    {
        $id = $this->createId();
        $object->setId($id);
        $this->barn->addContent($id, $object);
    }

    //Выводим текущие значения $products
    public function getProducts()
    {
        $output = [];
        foreach ($this->barn->getContent() as $value) {
            $amount = $value->getProducts();
            $type = $value->getProductType();
            if (!isset($output[$type])) {
                $output[$type] = $amount;
            } else {
                $output[$type] += $amount;
            }
        }
        foreach ($output as $key => $value) {
            echo 'Collected ' . $value . " $key" . '<br>';
        }
    }
}
