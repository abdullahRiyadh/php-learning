<?php
/*
  If you need to store multiple values, you can use arrays. Arrays hold "elements"
*/
// Simple Arrays 
$numbers = [1, 33, 44, 51]; // array of numbers

// Using the array function to create an array of numbers
$fruits = array('apple', 'orange', 'mango', 'Dates'); // array of strings

// Outputting values from an array
echo $fruits[3];
echo $numbers[3] + $numbers[4];

// We can use print_r or var_dump to see the contents of an array
print_r($numbers);
var_dump($numbers);
print_r($fruits);
var_dump($fruits);


// Associative Arrays 
$colors = [
    1 => 'red',
    5 => 'blue',
    10 => 'green'
];
print_r($colors);
var_dump($colors);
echo $colors[10];


// Strings as keys
$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'

];

var_dump($hex);
echo $hex['red'];




/*
  Multi-dimansional arrays are often used to store data in a table format.
*/

// Single person
$person = [
    'first_name' => 'Abdullah',
    'last_name' => 'Riyadh',
    'email' => 'ab@gmail.com'
];

// Array of people
$people = [
    $person,

    [
        'first_name' => 'Jon',
        'last_name' => 'Doe',
        'email' => 'jon@gmail.com'
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@gmail.com'
    ]
];
var_dump($people);

// Accessing values in a multi-dimensional array
echo $people[0]['first_name'];
echo $people[1]['email'];

// Encode to JSON
var_dump(json_encode($people));

// Decode from JSON
$jsonobj = '{"first_name":"Abdullah","last_name": "Riyadh","email":"ab@gmail.com"}';
var_dump(json_decode($jsonobj));
