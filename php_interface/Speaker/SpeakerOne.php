<?php

namespace Speaker;

use Contracts\SayHi;

/**
 *
 */
class SpeakerOne implements SayHi
{
    var $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function Hi()
    {
        echo "(1)Hi, " . $this->name;
    }
}
