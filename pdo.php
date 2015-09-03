<?php

try 
{
	$dbh = new PDO('mysql:host=127.0.0.1;post:3306;dbname=my_db', 'testuser', 'password');
	print_r($dbh);
} 
catch (PDOException $e) 
{
	print "Error!: " . $e->getMessage() . "";
	die();
}