<?php

namespace Farm;


class Barn extends Container
{
    private $content = [];


    public function getContent()
    {
        return $this->content;
    }

    public function addContent($key, $value)
    {
        $this->content[$key] = $value;
    }
}
