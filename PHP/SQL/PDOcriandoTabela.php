<?php

try{
	$conn = new PDO("mysql:host=localhost; dbname=pdo", "root", ""); 
	//definir o modo de erro do PDO para exceção
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	//Criando a tabela
	$sql = "CREATE TABLE MyGuests(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
//use exec () para retornar o resultado

$conn->exec($sql);
echo "tabela criada com sucesso";

		
		
} catch (PDOException $e )
{
	echo "Error" . $e->getMessage();
}
$conn = null;


 ?>