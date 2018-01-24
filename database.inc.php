<?php
	$servername = 'localhost';
	$dbusername = 'root';
	$dbpassword = '';
	$dbname = 'revels18';

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

	if($conn -> connect_errno) {
		echo 'Sorry. Failed to connect';
	}
?>