<?php

define('DIR', dirname(__FILE__));

require DIR . '/AutoLoading/loading.php';

spl_autoload_register("\\AutoLoading\\loading::autoload");

Lib\Name::test();

App\Ios\Name::test();
