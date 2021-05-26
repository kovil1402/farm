<?php

class Barn
{
    private $animals = [];

    public function __construct($chickens, $cows)
    {
        $this->addChickens($chickens);
        $this->addCows($cows);
    }

    public function getAnimals()
    {
        return $this->animals;
    }

    public function addChickens($chickens = 1)
    {
        for ($chickens; $chickens > 0; $chickens--) {
            $this->animals[] = new Chicken;
        }
    }
    public function addCows($cows = 1)
    {
        for ($cows; $cows > 0; $cows--) {
            $this->animals[] = new Cow;
        }
    }
}
