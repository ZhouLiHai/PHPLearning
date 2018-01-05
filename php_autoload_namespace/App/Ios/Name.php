<?php

namespace App\Ios;

use App\Ios\Db;
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
