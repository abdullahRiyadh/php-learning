<?php
// This is a php tag. Ending tag is optional if there is no other html or content.
// 

/* Ouptutting Content */

// echo - Output strings, numbers, html, etc
echo "Hello";
echo 123;
echo '<p>This is php</p>';

echo 123, "multiple arguments", 12.5;

// print - Similar to echo but a bit slower 
print "hello";

// pint_r() - Gives a bit more info. Can be used to print arrays 
print_r("Hello");
print_r([1, 2, 3]);

// var_dump()- Returns more info like data type and length 
var_dump("Hello");
var_dump([1, 2, 3]);
var_dump(true);

// var_export()-Similar to var_dump(), Outputs a string representation of a variable
var_export("Hello");

// Escaping characters with a backslash , Don't require with a double quotes.
echo 'Is your name O\'reilly?';
/* ------------ Comments ------------ */

// This is a single line comment

/*
      * This is a multi-line comment
      *
      * It can be used to comment out a block of code
      */

// If there is more content after the PHP, such as this file, you do need the ending tag. Otherwise you do not.
?>

<!-- You can output any HTML that you want within a .php file -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- You can output PHP including variables, etc -->
    <h1>Hello <?php echo 'Abdullah Riyadh'; ?></h1>
    <!-- You may only drop the semi-colon after a statement when the statement is followed immediately by a closing PHP tag ?>. -->
    <h1>Hello <?= 'Abdullah Riyadh' ?></h1>
    <!-- /*shorthand for eco is =*/ -->
</body>

</html>