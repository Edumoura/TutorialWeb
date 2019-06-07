<?php 
try{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo";
	//String de conexao
 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//comando
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES(:FIRSTNAME, :LASTNAME, :EMAIL)" );
$primeiro = "jose";
$segundo = "Antonio";
$email = "joseantonio@gmail.com";

//bind significa ligar ou seja para unir os parametros com query
$stmt->bindParam(":FIRSTNAME", $primeiro);
$stmt->bindParam(":LASTNAME", $segundo);
$stmt->bindParam(":EMAIL", $email);
 

$stmt->execute();

echo "Dados inseridos";

} catch (PDOException $e )
{
	echo "Error" . $e->getMessage();
}
$conn = null;






 ?>