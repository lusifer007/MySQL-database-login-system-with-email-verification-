<?php
	require("database.php");
	$username = base64_decode($_POST['username']);
	$check = "select username from users where username = '$username'";
	$response =  $db->query($check);
	if($response->num_rows != 0)
	{
		echo "user found";
	}
	else
	{
		echo "user not found";
	}
?>