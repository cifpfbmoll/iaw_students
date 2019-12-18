<?php
$db = mysqli_connect("db", "user", "test", "mydb");

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

?>