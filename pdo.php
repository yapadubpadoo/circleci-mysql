<?php

try 
{
	$dbh = new PDO('mysql:host=localhost;');
	print_r($dbh);
} 
catch (PDOException $e) 
{
	print "Error!: " . $e->getMessage() . "<br/>";
	die();
}