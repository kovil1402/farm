<?php

include_once "autoloader.php";

function createFarm($chickens, $cows)
{
    $barn = new Barn($chickens, $cows);
    $farm = new Farm($barn);

    $farm->displayProducts();
}
createFarm(20, 10);
