<?php

try 
{
	$dbh = new PDO('mysql:host=localhost;post:3306;dbname=my_db', 'testuser', 'password');
	print_r($dbh);
} 
catch (PDOException $e) 
{
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}