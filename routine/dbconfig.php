<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "attendance";
$connect = mysqli_connect($hostname, $username, $password, $dbname);
if (!$connect) {
    die('Could not connect: ' . mysql_error());
}
mysqli_select_db($connect, "attendance");
