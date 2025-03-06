<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple',  'orange', 'pear'];

// Get array length
echo count($fruits);

// Search array
var_dump(in_array('banana', $fruits));
echo in_array('apple', $fruits); // It will show 1, if not in array shows nothing

// Add to array
$fruits[] = "grape"; //insert last
print_r($fruits);
array_push($fruits, "blueberry", "strawberry"); // Push one or more elements onto the end of array
print_r($fruits);
array_unshift($fruits, 'mango', 'guava'); //It will insert elements at the most left or first element from index 0 
print_r($fruits);

// Remove from array
array_pop($fruits); //It will remove elements from the right or at the last index
print_r($fruits);
array_shift($fruits); //It will remove elements from the left or at the index 0
print_r($fruits);
unset($fruits[2]); //It will remove specified index
print_r($fruits);

// Split into chunks of 2

$chunked_array = array_chunk($fruits, 2);
print_r($chunked_array);

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
print_r($arr3);
var_dump($arr3);

// Use Spread
$arr4 = [...$arr1, ...$arr2];
var_dump($arr4);

// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avacado', 'apple', 'banana'];
$c = array_combine($a, $b);
print_r($c);
var_dump($c);

// Array of keys
$keys = array_keys($c);
print_r($keys);

// Flip keys with values
$flipped = array_flip($c);
var_dump($flipped);
print_r($flipped);

// Create array of numbers with range()
$numbers = range(1, 20);
print_r($numbers);

// Map through array and create a new one
$newNumbers = array_map(function ($number) {
    return "Number " . $number;
}, $numbers);
print_r($newNumbers);

// Filter array
$less_than_10 = array_filter($numbers, fn($number) => $number < 10);
print_r($less_than_10);


//Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);
