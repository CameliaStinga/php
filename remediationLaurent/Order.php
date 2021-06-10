<?php


class Order
{
    private $tableNumber;

    private array $glasses = [];

    public function __construct($tableNumber)
    {
        $this->tableNumber = $tableNumber;
    }

    public function addGlass(Glass $glass) {
        array_push($this->glasses, $glass);
    }

    public function getGlasses(){
        return $this->glasses;
    }

    public function fromCustomerOrder(array $boissons) {
        foreach ($boissons as $boisson) {
            $drink = new SoftDrink($boisson["name"]);
            $glass = new Glass($boisson["size"]);
            $glass->fill($drink);

            $this->addGlass($glass);
        }
    }

}