<?php 
	// connected database
	$con = new mysqli('localhost','root','','e_classe_db');
	if(!$con){
		die(mysqli_error($con));
	}
?>