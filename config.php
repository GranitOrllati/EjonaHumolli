<?php 	
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


	$host = 'localhost';
	$db = 'lovebooks';
	$user = 'root';
	$password = '';


	try {

		$con = new PDO("mysql:host=$host; dbname=$db", $user, $password);
		
	} catch (Exception $e) {
		
		echo "Something went wrong";
		$e->getMessage();
	}

	






 ?>