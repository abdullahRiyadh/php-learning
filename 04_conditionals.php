<?php
/* ---- Conditionals & Operators ---- */


/*-------------------Operators----------------------*/
/*
< Less than
> Greater than
<= Less than or equal to 
>= Greater than or equal to 
=== Identical to 
!= Not equal to 
!== Not identical to 
*/

/* ---------- If Statements --------- */

/* 
** If Statement Syntax 
if (conditon){
//conde to be executed if condtion is true
}
*/
$age = 17;
if ($age >= 18) {
    echo "You are eligible to vote";
} else {
    echo "You are  not eligible to vote";
}


// Dates
// $t = date("F"); // F represents current Month
// echo $t;

$today = date("F j, Y, g:i a");
echo $today;

$t = date("H");
if ($t < 12) {
    echo "Good morning";
} elseif ($t < 17) {
    echo "Good afternoon";
} else {
    echo "Good evening";
}

// Check if an array is empty
// The isset() function will generate a warning or e-notice when the variable does not exists. The empty() function will not generate any warning or e-notice when the variable does not exists.

$posts = ["First Post", "Second Post"];
if (!empty($posts)) {
    echo $posts[0];
} else {
    echo "No posts";
}
echo !empty($posts) ? $posts[0] : 'No posts';

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// Echo based on a condition (Same as above)
echo !empty($posts[0]) ? $posts[0] : 'There are no posts';



// Assign a variable based on a condition
$first_post = !empty($posts) ? $posts[0] : 'No posts';

echo $first_post;

$second_post = !empty($posts) ? $posts[1] : null; // if index doesn't exits it will through error
echo $second_post;


// Null Coalescing Operator ??
$third_post = $posts[2] ?? null; //if index doesn't exist it will show null;
echo $third_post;
var_dump($third_post);


/* -------- Switch Statements ------- */
$fav_color = "orange";
switch ($fav_color) {

    case "blue":
        echo "Your favorite color is blue";
        break;
    case "green":
        echo "Your favorite color is green";
        break;
    case 'red':
        echo "Your favorite color is red";
        break;
    default:
        echo "Your favorite color is not red, green or blue";
}
