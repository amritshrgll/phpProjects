<?php
$con = mysqli_connect("localhost","root","","amrit");
if($con)
{
	echo "connected";
}
else
{
	echo "not connected";
}
?>