<?php
$con = mysqli_connect("localhost","root","","amrit");
if($con)
{
	echo "run";
}
else
{
	mysqli_connect_error();
}
?>