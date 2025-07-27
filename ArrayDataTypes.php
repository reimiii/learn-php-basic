<?php

$values = [10, 9, 8, 7.5];
var_dump($values);

$names = ["Noir", "Smith", "Anderson"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Alex";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "John";
var_dump($names);

var_dump(count($names));

$noir = [
    "id" => "noir",
    "name" => "Noir",
    "age" => 30,
    "address" => [
        "city" => "New York",
        "country" => "USA",
    ],
];
var_dump($noir);

var_dump($noir["name"]);
var_dump($noir["address"]["country"]);

$john = [
    "id" => "john",
    "name" => "John Carter",
    "age" => 35,
    "address" => [
        "city" => "Los Angeles",
        "country" => "USA",
    ],
];

var_dump($john);
