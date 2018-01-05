<?php

use PHPUnit\Framework\TestCase;

trait TestTraitExists
{

}

class TestClassExists
{
    use TestTraitExists;

    public $testPublicPropertyExists;
    private $testPrivatePropertyExists;
    protected $testProtectedPropertyExists;

    public function testPublicMethodExists()
    {

    }

    private function testPrivateMethodExists()
    {

    }

    protected function testProtectedMethodExists()
    {

    }
}

interface TestInterfaceExists
{

}

class ParentClass
{
    public function getCalledClass()
    {
        return get_called_class();
    }
}

class ChildClass extends ParentClass
{

}

class ReflectionTest extends TestCase
{
    public function testIsDoctrineAvailable()
    {
        $this->assertTrue(class_exists(TestClassExists::class));
    }

    public function testInterfaceExists()
    {
        $this->assertTrue(interface_exists(TestInterfaceExists::class));
    }

    public function testMethodExists()
    {
        $testObject = new TestClassExists();

        $this->assertTrue(method_exists($testObject, 'testPublicMethodExists'));
        $this->assertTrue(method_exists($testObject, 'testPrivateMethodExists'));
        $this->assertTrue(method_exists($testObject, 'testProtectedMethodExists'));

        $this->assertTrue(method_exists(TestClassExists::class, 'testPublicMethodExists'));
        $this->assertTrue(method_exists(TestClassExists::class, 'testPrivateMethodExists'));
        $this->assertTrue(method_exists(TestClassExists::class, 'testProtectedMethodExists'));
    }

    public function testPropertyExists()
    {
        $testObject = new TestClassExists();

        $this->assertTrue(property_exists($testObject, 'testPublicPropertyExists'));
        $this->assertTrue(property_exists($testObject, 'testPrivatePropertyExists'));
        $this->assertTrue(property_exists($testObject, 'testProtectedPropertyExists'));

        $this->assertTrue(property_exists(TestClassExists::class, 'testPublicPropertyExists'));
        $this->assertTrue(property_exists(TestClassExists::class, 'testPrivatePropertyExists'));
        $this->assertTrue(property_exists(TestClassExists::class, 'testProtectedPropertyExists'));
    }

    public function testTraitExists()
    {
        $this->assertTrue(trait_exists(TestTraitExists::class));
    }

    public function testGetClass()
    {
        $testObject = new TestClassExists();

        $this->assertSame(get_class($testObject), TestClassExists::class);
    }

    public function testGetParentClass()
    {
        $childClass = new ChildClass();

        $parentClassFromObject = get_parent_class($childClass);
        $parentClassFromClass = get_parent_class(ChildClass::class);

        $this->assertSame(ParentClass::class, $parentClassFromObject);
        $this->assertSame(ParentClass::class, $parentClassFromClass);
    }

    public function testGetCalledClass()
    {
        $childClass = new ChildClass();
        $parentClass = new ParentClass();

        $childCalled = $childClass->getCalledClass();
        $parentCalled = $parentClass->getCalledClass();

        $this->assertSame(ChildClass::class, $childCalled);
        $this->assertSame(ParentClass::class, $parentCalled);
    }

    public function testGetClassMethod()
    {
        $get_class_methods = get_class_methods(TestClassExists::class);

        $this->assertTrue(in_array('testPublicMethodExists', $get_class_methods, true));
        $this->assertFalse(in_array('testPrivateMethodExists', $get_class_methods, true));
        $this->assertFalse(in_array('testProtectedMethodExists', $get_class_methods, true));
    }

    public function testIsSubClassOf()
    {
        $childClass = new ChildClass();

        $this->assertTrue(is_subclass_of($childClass, ParentClass::class));
    }

    public function testIsA()
    {
        $child_class = new ChildClass();

        $this->assertTrue(is_a($child_class, ChildClass::class));
        $this->assertTrue(is_a($child_class, ParentClass::class));
    }
}