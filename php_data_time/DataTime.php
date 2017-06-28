<?php

date_default_timezone_set('Asia/Shanghai');

$datetime = new DateTime();

print_r($datetime);

$datetime = new DateTime('2016-06-06 10:00 pm');

print_r($datetime);

$datetime = DateTime::createFromFormat('j M, Y H:i:s', '6 June, 2016 00:03:05');

print_r($datetime);

$interval = new DateInterval('P2D');

$datetime->add($interval);

print_r($datetime);

$dateperiod = new DatePeriod(new DateTime(), $interval, 8);

foreach ($dateperiod as $date) {
    echo $date->format('Y-m-d') . PHP_EOL;
}
