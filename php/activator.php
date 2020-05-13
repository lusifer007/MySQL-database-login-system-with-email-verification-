<?php
require("database.php");
	$code = base64_decode($_POST['code']);
	$username = base64_decode($_POST['username']);
	$check_code = "select activation_code from users where username = '$username' and activation_code = '$code'";
    $response = 	$db->query($check_code);
	if($response->num_rows != 0)
	{
		$update_status = "update users set status = 'active' where username = '$username' and activation_code = '$code'";
		if($db->query($update_status))
		{
			echo "user verified";
		}
		else{
			echo "Activation failed please try again later";
		}
	}
else
{
	echo "wrong activation code";
}
	
?>