<?php
echo "Reflection hw";
echo'<br>';



$class = new ReflectionClass('ReflectionClass');
$method = $class->getMethod('getMethod');
var_dump($method);
echo '<hr>';
class Test{
        const ONE = "Number one";
        const TWO = "Number two";
    }
   
    $obj = new ReflectionClass( "Test" );
    echo $obj->getconstant( "ONE" )."\n";
    echo $obj->getconstant( "TWO" )."\n";
echo '<hr>';
$class = new ReflectionClass('ReflectionClass');
$constructor = $class->getConstructor();
var_dump($constructor);
echo '<hr>';
class Foo {
    public    $foo  = 1;
    protected $bar  = 2;
    private   $baz  = 3;
}

$foo = new Foo();

$reflect = new ReflectionClass($foo);
$props   = $reflect->getProperties(ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED);

foreach ($props as $prop) {
    print $prop->getName() . "\n";
}
var_dump($props);
echo '<hr>';
class TestClass { }

$rc = new ReflectionClass('TestClass');

echo $rc->getEndLine();
echo '<hr>';
?>
