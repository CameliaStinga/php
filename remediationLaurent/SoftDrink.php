<?php


class SoftDrink extends Drink
{
    public function __construct(string $name)
    {
        parent::__construct($name, 0);
    }

    public function getName()
    {
        return ' 🚸 ' . $this->name;
    }
}