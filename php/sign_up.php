<?php
require("database.php");
	$fullname = base64_decode($_POST['fullname']);
	$username = base64_decode($_POST['username']);
	$password = md5(base64_decode($_POST['password']));
$pattern = "1234567890";

$i;
$length = strlen($pattern) - 1;
$p = [];
for($i=0;$i<6;$i++)
{
	$index = rand(0,$length);
	$p[] = $pattern[$index];
	
}
$activation_code =  implode($p);

$Store_user = "insert into users(full_name,username,password,activation_code)
values('$fullname','$username','$password','$activation_code')
";
if($db->query($Store_user))
{
$check_mail = 	mail($username,"Picdrive Activation Code","Thank You for choosing our product your activation code is : ".$activation_code);
	if($check_mail){
		echo "sending success";
	}
	else{
		echo "sending failed";
	}
}
else{
	echo "Sign up failed";
}
?>