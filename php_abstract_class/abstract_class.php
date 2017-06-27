<?php

/**
* 
*/
class MyClass
{
    public $var1  = 'value 1';
    public $var2  = 'value 2';
    public $var3  = 'value 3';

    protected $protected = 'protected var';
    private   $private   = 'private var';

    public function __construct()
    {
        # code...
    }

    function iterateVisible() {
       echo "MyClass::iterateVisible:\n";
       foreach($this as $key => $value) {
           print "$key => $value\n";
       }
    }
}

// $class = new MyClass();

// foreach ($class as $key => $value) {
//     print "$key => $value\n";
// }

// echo "\n";

// $class->iterateVisible();

/**
* 
*/
class MyClass2 implements Iterator
{
    private $var = array();

    public function __construct($array)
    {
        if (is_array($array)) {
            $this->var = $array;
        }
    }

    public function rewind() {
        echo "rewinding\n";
        reset($this->var);
    }

    public function current() {
        $var = current($this->var);
        echo "current: $var\n";
        return $var;
    }

    public function key() {
        $var = key($this->var);
        echo "key: $var\n";
        return $var;
    }

    public function next() {
        $var = next($this->var);
        echo "next: $var\n";
        return $var;
    }

    public function valid() {
        $var = $this->current() !== false;
        echo "valid: {$var}\n";
        return $var;
    }
}


$class2 = new MyClass2(array());

function foo(&$var) {}

function bar($var) {}

foo($a);

$b = array();
foo($b['b']);
var_dump(array_key_exists('b', $b));

$c = new StdClass;
foo($c->d);
var_dump(property_exists($c, 'd'));



function test() {
    $foo = "local variable";

    echo "$foo in global scope: " . $GLOBALS["foo"] . "\n";
    echo "$foo in current scpoe: " . $foo . "\n";
}

$foo = "Example content";
test();


class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    public function __clone() {
        $this->instance = ++self::$instances;
    }
}

/**
* 
*/
class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
        $this->object1 = clone $this->object1;
    }
}

$obj = new MyCloneable();
$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;

print("Original Object:\n");
print_r($obj);

print("Cloned Object:\n");
print_r($obj2);



