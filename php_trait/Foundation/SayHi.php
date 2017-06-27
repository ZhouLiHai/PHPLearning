<?php

namespace Foundation;

/**
 *
 */
trait SayHi
{
    function Hi()
    {
        echo "Hi, " . $this->name . PHP_EOL;
    }
}
