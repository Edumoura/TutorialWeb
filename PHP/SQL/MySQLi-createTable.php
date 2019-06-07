<?php 

//cria a conexão com o banco
$conn = new mysqli("localhost", "root", "", "mysqli");

//verifica a conexão
if ($conn->connect_error){

	echo "Error " . $conn->connect_error;
	exit;
} else {
	echo "Ok<br>";
}

//cria a tabela

$sql = "CREATE TABLE MyGuests(

id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname Varchar(30) NOT NULL,

lestname Varchar(30) NOT NULL,

email Varchar(50),

reg_dade TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

)";

if ($conn->query($sql) === true){
	echo  "Table MyGuests created successfully"; 
} else {

	echo "Error creating table: " . $conn->error;
}

$conn->close();



 ?>