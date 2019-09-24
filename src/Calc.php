<?php declare(strict_types=1);

namespace App;

class Calc implements CalcInterface {

    public function multiply (float $a, float $b) : float {
        return $a * $b;
    }

    public function divide (float $a, float $b) : float {
        return $a / $b;
    }
}