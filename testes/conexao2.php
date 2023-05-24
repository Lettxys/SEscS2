<?php
	

	$servidor = "localhost";
	$username = "root";
	$password = "";
	$database = "test";

	$connection = mysqli_connect($servidor, $username, $password, $database);
	if (!$connection) {
		echo "Não conectado ";	
	}
    ?>