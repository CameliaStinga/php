<?php


class Glass
{
    public $size;
    public Drink $drink;

    public function __construct($size)
    {
        $this->size = $size;
    }

    public function fill(Drink $drink){
        $this->drink = $drink;
    }
}