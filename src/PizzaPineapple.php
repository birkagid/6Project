<?php

namespace Birka\Sixth\Library;

use Birka\Sixth\Library\Pizza;

class PizzaPineapple extends Pizza
{
    public function __construct()
    {
        parent::__construct("Гавайская", "cырный", ["ананас", "курица"]);
    }
}
