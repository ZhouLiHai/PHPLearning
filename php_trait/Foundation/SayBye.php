<?php

namespace Foundation;

/**
 *
 */
trait SayBye
{
    function Bye()
    {
        echo "Bye, " . $this->name . PHP_EOL;
    }
}
