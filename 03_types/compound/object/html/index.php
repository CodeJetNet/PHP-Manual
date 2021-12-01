<?php
echo "<pre>";

class Person
{
    public $name = "Smith";
    public $age = 42;
    public $birthday = "12/12/1942";
}

$personObject = new Person();
var_dump($personObject);

// The quickest way to create an empty generic object in PHP
$emptyObject = new stdClass();
var_dump($emptyObject);

// And a few alternatives.
var_dump(new class {});
var_dump((object)[]);

// Cast array to object
$array = [
    "name" => "John",
    "age" => 42,
    "birthday" => "12/12/1942"
];
var_dump((object) $array);


// Cast scalars to an object.
$thisIsAString = "Some string";
$castingAScalarToAnObject = (object) $thisIsAString;
var_dump($castingAScalarToAnObject);
echo $castingAScalarToAnObject->scalar . "\n";

$thisIsAnInteger = 42;
var_dump((object) $thisIsAnInteger);

$thisIsAFloat = 4.2;
var_dump((object) $thisIsAFloat);

$thisIsABoolean = true;
var_dump((object) $thisIsABoolean);

// Casting null to an object will create an empty object.
var_dump((object) null);