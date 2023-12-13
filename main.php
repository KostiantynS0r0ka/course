<?php

function MyFunction($age)
{
    echo PHP_EOL;
    echo "This is $age years old";
    echo PHP_EOL;
//    echo 'This is ' . $age . ' years old' . PHP_EOL;
}

//   CamelCase
//   MyFunction
//   my_function
//   myFunction
function _setSmth()
{

}

//MyFunction(99);
//MyFunction(22);
//MyFunction(33);
//MyFunction(45);
//MyFunction(67);


class Human
{
    function _doSomething()
    {

    }

    function say()
    {
        echo 'Hello, I\'m human' . PHP_EOL;
    }

    function work()
    {
        echo 'I don\'t have work' . PHP_EOL;
    }
}

class Programmer extends Human
{
    function work()
    {
        echo 'I work as programmer' . PHP_EOL;
    }
}

class JuniorProgrammer extends Programmer
{
    //
}


$human = new Human;
$programmer = new Programmer;
$junior = new JuniorProgrammer;

//$human->say();
$junior->_doSomething();