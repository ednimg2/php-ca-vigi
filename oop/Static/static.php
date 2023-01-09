<?php

class MyClass
{
    public static $staticProperty = 'static property';

    public static function staticMethod()
    {
        return 'static method';
    }
}

echo MyClass::$staticProperty . PHP_EOL;
echo MyClass::staticMethod();

