<?php

$hostname = "localhost";
$username = "root";
$password = "password";
$database = "user";

$conn = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed");

$base_url = "http://localhost/sps/";
$my_email = "test@test.com";

?>
