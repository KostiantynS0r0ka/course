<?php

/*
NULL
boolean - true|false.  1|0
integer - 1, 10, 100
float.  - 1.5 .....
string. - '120'

array
object
Resource
 */
$var = [
   'Name' => 'Ivan',
   'age'  => 30
];

isset($var[1]) ? $var[1] : 'inshe znachennya';

if (isset($var['name'])) {
	$name = $var['name'];
} else {
	$name = 'Default name';
}

echo $name . PHP_EOL;
