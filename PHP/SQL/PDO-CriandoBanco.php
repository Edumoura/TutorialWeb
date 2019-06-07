<?php 

$servername = "localhost";
$username  = "root";
$password = "";

try {
	$conn = new PDO("mysql:host=$servername", $username, $password );
	//definir o modo de erro do PDO para exceção
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
$sql = "CREATE DATABASE PDO";
$conn->exec($sql);
echo "Banco criado com sucesso";
	
} catch (PDOException $e) 
{

echo $sql . "<br>" . $e->getMessage();	
	
}

$conn = null;

 ?>