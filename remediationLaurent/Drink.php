<?php


abstract class Drink
{
    protected $name;
    public $alcool;

    public function __construct(string $name, int $alcool)
    {
        $this->name = $name;
        $this->alcool = $alcool;
    }

}