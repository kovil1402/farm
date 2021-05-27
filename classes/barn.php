<?php

class Barn extends Container
{
    private $content = [];

    public function __construct($chickens, $cows)
    {
        $this->addChickens($chickens);
        $this->addCows($cows);
    }

    public function getContent()
    {
        return $this->content;
    }

    public function addChickens($chickens = 1)
    {
        for ($chickens; $chickens > 0; $chickens--) {
            $this->content[] = new Chicken;
        }
    }
    public function addCows($cows = 1)
    {
        for ($cows; $cows > 0; $cows--) {
            $this->content[] = new Cow;
        }
    }
}
