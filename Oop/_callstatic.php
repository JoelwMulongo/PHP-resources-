

<?php
class MethodTest
{
    public static function __callStatic($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling static method '$name' "
             . implode(', ', $arguments). "\n";
    }
}

MethodTest::runTest('in static context');  // As of PHP 5.3.0
?>
