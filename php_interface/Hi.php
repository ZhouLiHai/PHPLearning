<?php

use Contracts\SayHi;

/**
 *
 */
class Hi
{
    var $speaker;

    function __construct(SayHi $speaker)
    {
        $this->speaker = $speaker;
    }

    public function say()
    {
        $this->speaker->Hi("zhou");
    }
}
