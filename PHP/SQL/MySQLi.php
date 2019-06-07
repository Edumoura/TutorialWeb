<?php 

//cria a conexão com o banco
$conn = new mysqli("localhost", "root", "", "bancotest");

//verifica a conexão
if ($conn->connect_error){

	echo "Error " . $conn->connect_error;
	exit;
} else {
	echo "Ok";
}





 ?>