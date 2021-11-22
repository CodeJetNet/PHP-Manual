<?php
echo "<pre>";
echo "<h1>Arrays</h1>";

var_dump(array(1, 2, 4));
var_dump([1, 2, 4]);

var_dump([
    1 => 'a',
    "1" => 'b',
    1.6 => 'c',
    true => 'd'
]);

var_dump([
    null => "cast to string"
]);

// Keys are not required.
var_dump(array("one", "buckle", "fun"));

$array = [
    "one" => "a",
    "two" => "b",
    "three" => "c"
];
var_dump($array["one"]);

list("one" => $one) = $array;
var_dump($one);

$array["one"] = "modified";
$array["four"] = "added";
$array[] = "last";
var_dump($array);


class A {
    public $a = "a";
    private $b = "b";
}

class B extends A {
    public $c = "c";
    private $d = "d";
}

$casted = (array) new B();
var_dump($casted);