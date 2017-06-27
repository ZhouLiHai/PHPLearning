<?php

define('DIR', dirname(__FILE__));

require DIR . '/AutoLoading/loading.php';

spl_autoload_register("\\AutoLoading\\loading::autoload");

use Speaker\SpeakerOne;
use Speaker\SpeakerTwo;

$m = new Hi(new SpeakerTwo("zhou"));

$m->say();
