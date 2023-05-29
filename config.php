<?php
// Connection To Database
$servername = 'localhost';
$username = 'root';
$password = '';
//$conn = new mysqli($servername, $username, $password, "bulkSMS") or die("Error ". mysqli_error($conn));
$con = new PDO("mysql:host=$servername;dbname=massmailpro", $username, $password);
//session_start();

?>