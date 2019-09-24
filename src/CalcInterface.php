<?php

namespace App;

interface CalcInterface {

    public function multiply (float $a, float $b) : float;

    public function divide (float $a, float $b) : float;

}