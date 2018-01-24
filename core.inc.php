<?php
	session_start();
	//$current_file = $_SERVER['SCRIPT_NAME'];
	
	function loggedin() {
		if(isset($_SESSION['delno']) && !empty($_SESSION['delno']))
			return true;
		 else 
			return false;
	}
?>