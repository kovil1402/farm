<?php

namespace Farm;

interface Business
{
    public function getProducts();

    public function processObject($object);
}
