<?php

class MyClass {
    public function sayHello() {
        return "Hello, World!";
    }
}

class Person{
    public int $id;
    public string $name;

    public function __construct(int $id, string $name) {
        $this->id = $id;
        $this->name = $name;
    }
    public function persondetails(): string {
        return "ID: " . $this->id . ", Name: " . $this->name;
    }   

}

$person1=new Person(1,"John");

echo $person1->persondetails();


$myObject = new MyClass();
echo $myObject->sayHello();