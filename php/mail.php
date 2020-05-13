<?php
	$status = mail("milan.hembram1998@gmail.com","testing email","my name is milan");
if($status == true )
{
	echo "send successfully";
}
else
{
	echo "mail could not be sent";
}
?>