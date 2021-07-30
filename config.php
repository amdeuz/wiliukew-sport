<?php
//Development Database
// $server = "localhost";
// $user = "root";
// $pass = "";
// $database = "login-and-register";

//Remote Database Connection
$server = "remotemysql.com";
$user = "m6aPYxczbs";
$pass = "YfdyStmzAN";
$database = "m6aPYxczbs";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
