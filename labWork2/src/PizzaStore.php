<?php

require_once "Pizza.php";

abstract class PizzaStore
{

    abstract function createPizza(string $type): Pizza;

    public function orderPizza(string $type): void
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->cut();
    }
}
