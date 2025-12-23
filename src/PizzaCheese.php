<?php

namespace Birka\Sixth\Library;

use Birka\Sixth\Library\Pizza;

class PizzaCheese extends Pizza
{
    public function __construct()
    {
        parent::__construct("Сырная", "сырный", ["моцарелла", "пармезан"]);
    }
}
