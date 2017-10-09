<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doe";

$cn = mysql_connect($servername, $username, $password) or die("Connection failed to database");

mysql_select_db($dbname, $cn) or die ("Connection Successful"); 
?>


