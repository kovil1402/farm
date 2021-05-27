<?php

use Farm\AnimalFactory;

include_once realpath("vendor/autoload.php");

// Ферма выдает продукты при 20 курицах и 10 коровах
$barn = new Farm\Barn();
$farm = new Farm\Farm($barn);
for ($chickens = 20; $chickens > 0; $chickens--) {
    $newChicken = AnimalFactory::createChicken();
    $farm->processObject($newChicken);
}
for ($cows = 10; $cows > 0; $cows--) {
    $newCow = AnimalFactory::createCow();
    $farm->processObject($newCow);
}

$farm->getProducts();

// Возможность добавить курицу на ферму

$newChicken = AnimalFactory::createChicken();

$farm->processObject($newChicken);
