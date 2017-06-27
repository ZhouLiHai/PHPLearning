<?php

$db = new DB();

function __autoload($className)
{
    require $className . ".php";
}
