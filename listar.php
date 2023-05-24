<?php
	include 'conexaobd.php';
	$listarSQL = mysqli_query($connection, "SELECT * FROM fichas");

?>