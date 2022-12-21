<?php

abstract class Pizza
{

    public string $name;
    public string $souce;
    public array $toppings;
    public string $cuttingMethod;

    public function prepare(): void
    {
        echo "Началась готовка пицццы {$this->name}\n";
        echo "Добавлен соус {$this->souce}\n";
        echo "Добавлены топики : ";
        foreach ($this->toppings as $value) {
            echo $value . ", ";
        }
        echo "\n";
    }

    public function cut(): void
    {
        echo "Данную пиццу нарезают {$this->cuttingMethod}";
    }
}
