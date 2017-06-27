<?php

define('DIR', dirname(__FILE__));

require DIR . '/AutoLoading/loading.php';

spl_autoload_register("\\AutoLoading\\loading::autoload");

use Foundation\SayHi;
use Foundation\SayBye;

/**
 *
 */
class Human
{
    use SayHi;
    use SayBye;

    var $name;

    function __construct($name)
    {
        $this->name = $name;
    }
}

$h = new Human("Tom");

$h->Hi();
$h->Bye();
