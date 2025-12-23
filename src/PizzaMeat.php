<?php

namespace Birka\Sixth\Library;

use Birka\Sixth\Library\Pizza;

class PizzaMeat extends Pizza
{
    public function __construct()
    {
        parent::__construct("Мясная", "барбекю", ["бекон", "курица"]);
    }
}
