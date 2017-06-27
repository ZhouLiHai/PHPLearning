<?php

namespace Speaker;

use Contracts\SayHi;

/**
 *
 */
class SpeakerTwo implements SayHi
{
    var $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function Hi()
    {
        echo "(2)Hi, " . $this->name;
    }
}
