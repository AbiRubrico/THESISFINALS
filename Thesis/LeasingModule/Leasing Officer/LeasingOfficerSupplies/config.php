<?php 

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'marthagoshen';

//check connection
$connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname)
		or die("Connection failed: ");
?>