<?php 
 $host = "localhost";
 $username = "root";
 $password = "";
 $dbname = "curd";
 
 
 // Create a MySQLi connection
 $mysqli = new mysqli($host, $username, $password, $dbname);
 
 // Check for connection errors
 if ($mysqli->connect_error) {
     die("Connection failed: " . $mysqli->connect_error);
 }
?>