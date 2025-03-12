<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
*/

function registerUser()
{
    echo "User has been registered!";
}
// Running a function

registerUser();

// scope
// global scope
$user = "Abdullah";

function registerUser1()
{
    global $user;
    echo "User " . $user . " has been registered!";
}
registerUser1();

// local scope
function registerUser2()
{
    $user = "Riyadh";
    echo "User " . $user . " has been registered!";
}
registerUser2();

//Adding Parameters
function registerUser3($user)
{
    echo "User " . $user . " has been registered!";
}

// passing arguments
registerUser3("Abdullah");

// Returning values

function add($num1, $num2)
{
    return $num1 + $num2;
}

$sum = add(5, 2);
echo $sum;

// Adding default values
function subtract($num1 = 10, $num2 = 3)
{
    return $num1 - $num2;
}
echo subtract();

// Assigning anonymous functions to variables. Often used for closures and callback functions

$add = function ($num1, $num2) { //nameless or anonymous
    return $num1 + $num2;
};

echo $add(5, 5);

// Arrow functions
$multiply = fn($num1, $num2) => $num1 * $num2;
echo $multiply(3, 3);
