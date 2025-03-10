<?php
/* ---$_GET & $_POST Superglobals---*/

/*
    We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/


if (isset($_POST['submit'])) {
    // echo $_GET['name'];
    // echo $_GET['age'];
    echo $_POST['name'];
    echo $_POST['age'];
}

?>
<!-- Pass data through a link -->
<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?name=Abdullah&age=28">Click</a>

<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>
    <br>
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>
    <br>
    <input type="submit" value="Sumbit" name="submit">
</form>