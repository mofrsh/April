<?php
// connect to database
$db = mysqli_connect("localhost", "root", "", "april");

if (!$db) {
    die("Error connecting to database: " . mysqli_connect_error());
}
?>