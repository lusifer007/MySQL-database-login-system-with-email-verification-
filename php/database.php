<?php
	$db = new mysqli("localhost","root","","picdrive");
	if($db->connect_error){
		die("Database not Connected");
	}
	
?>