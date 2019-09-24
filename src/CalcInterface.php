<?php

namespace App;

interface CalcInterface {

    //умножить
    public function multiply (float $a, float $b) : float;

    //разделить
    public function divide (float $a, float $b) : float;

    //сложить
    public function plus (float $a, float $b) : float;

    //отнять
    public function min (float $a, float $b) : float;

    //логарифм
    public function log (float $a, float $b) : float;

    //нат логарифм
    public function ln (float $a) : float;

    //возведение в степень
    public function pow (float $a, float $b) : float;

    //процент
    public function per (float $a, float $b) : float;

    //корень квадратный
    public function sqrt (float $a) : float;

    //факториал
    public function fact (float $a) : float;


}