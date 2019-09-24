<?php declare(strict_types=1);

use App\Calc;

require '../vendor/autoload.php';

// echo 12345;

$obj = new Calc();

echo $obj->multiply(13, 13);
echo '<br/>';
echo $obj->divide(11, 12);
echo '<br/>';