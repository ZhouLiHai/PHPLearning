<?php

$greet = function ($name)
{
        return sprintf("Hello %s\n", $name);
};

echo $greet("zhou");


$numberMultTwo = array_map(function ($num) {
    return $num * 2;
}, [1,2,3]);

print_r($numberMultTwo);


function CalculatePrice($tax) {
    return function($price) use($tax) {
        return $price * (1 + $tax);
    };
};

$calculater = CalculatePrice(0.2);

echo $calculater(100) . PHP_EOL;
