<?php

use App\Ios\Db;

namespace App\Ios;
/**
 *
 */
class Name
{
    function __construct()
    {
        echo "App::Name";
    }

    public static function test()
    {
        echo "App::Name";
        $db = new Db();
        $db->dataBase();
    }
}
