<?php
include_once('config.php');
try{
	$conn = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Error: ".$e->getMessage();
}
?>