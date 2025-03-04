<?php
/*------------- PHP Data Types----------------*/

/*
-String       Series of characters surrounded by quotes
-Integer      Whole numbers
-Float        Decimal number
-Boolean      True or False
-Array        Special variable, which can hold more than one value
-Object       A class
-NULL         Empty variable
-Resource     Special variable that holds resource
*/

/*-----------Variable Rules ------------*/
/* 
-Variables must be prefixed with $
-Variables must start with a letter or the underscore character 
-variables can't stat with a number 
-variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _)
-Variables are case-sensetive ($name and $NAME are two different variables)
*/

$name = 'Abdullah'; // String
$age = 28; // Int
$has_kids = false;
$cash_on_hand = 10.5; // Float



// var_dump($has_kids);
// var_dump($cash_on_hand);
echo '$name is $age years old'; // single quotes are not going to parse variables
echo "$name is $age years old";
echo $name . ' is ' . $age . ' years old'; //concat also works

// echo "${name}  is ${age} years old"; deprecated

// Arithmetic Operators
echo 5 + 5; //10
echo '5' + '5'; // also 10
$x = '5' + '5';
var_dump($x); //int 10
echo 10 - 5;
echo 5 * 7;
echo 19 / 3;

echo 10 % 3;

// Constants - Can not be changed
define('HOST', 'localhost');
define("USER", "root");
var_dump(HOST);
var_dump(USER);
