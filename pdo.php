<?php

try 
{
	$dbh = new PDO('mysql:host=localhost;post:3306;');
	print_r($dbh);
} 
catch (PDOException $e) 
{
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}