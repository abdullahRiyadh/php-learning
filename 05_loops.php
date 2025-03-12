<?php
/* -------- Loops & Iteration ------- */

/*----------------For Loop ------------------------*/

/*
**For Loop Syntax

for (initialize; condition; increment){
//code to be executed
}
*/
for ($x = 0; $x <= 10; $x++) {
    echo "Number: $x <br>";
}

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
initialze;
  while (condition) {
  // code to be executed
  increment;
  }
*/

$x = 1;

while ($x <= 15) {
    echo "Number:" . $x . "<br> "; //Concatenation
    $x = $x + 2;
}

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
initialize;
  do {
  // code to be executed
  increment;
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
$x = 1;
do {
    echo "Number: $x <br>";
    $x++;
} while ($x <= 5);


/*-----------------Foreach Loop----------------------*/
/*
** Foreach Loop Syntax
    foreach($sarray as $value){
        //code to be executed
    }
*/

$posts = ['First Post', 'Second Post', 'Third Post'];

for ($x = 0; $x < count($posts); $x++) {
    echo $posts[$x]; // using for loop
}

foreach ($posts as $post) {
    echo $post;
}
// Use the indexes within the loop
foreach ($posts as $index => $post) {
    echo $index + 1 . ' ' . $post . '<br>';
}

// Use the keys within the loop for an associative array
$person = [
    'first_name' => 'Abdullah',
    'last_name' => 'Riyadh',
    'email' => 'ab@gmail.com'
];

foreach ($person as $key => $value) {
    echo $key . "-" . $value . '<br>';
}
