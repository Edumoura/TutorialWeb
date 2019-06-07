<?php

try{
	$conn = new PDO("mysql:host=localhost", "root", ""); 
	echo "Conectado";
		
		
} catch (PDOException $e )
{
	echo "Error" . $e->getMessage();

}

 ?>