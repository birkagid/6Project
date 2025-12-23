<?php

namespace Birka\Sixth\Library;

use Birka\Sixth\Library\PizzaStore;

class PizzaStoreDodo extends PizzaStore
{
    public function createPizza(string $type): ?Pizza
    {
        switch ($type) {
            case "Ананас":
                return new PizzaPineapple();
            case "Сыр":
                return new PizzaCheese();
            case "Мясо":
                return new PizzaMeat();
            default:
                return null;
        }
    }
}
