<?php
class Math
{
    public static function add($a, $b)
    {
        return $a + $b;
    }
}

echo Math::add(10, 20);

//static method can be called without creating an instance of the class
//double colon (::) is used to call static methods<?php

class User
{
    public static int $count = 0;

    public static function register(): void
    {
        self::$count++;

        echo "User registered.\n";
    }

    public static function getCount(): int
    {
        return self::$count;
    }
}

User::register();
User::register();
User::register();

echo "Total users: " . User::getCount() . "\n";



//self keyword is used to access static properties and methods within the class