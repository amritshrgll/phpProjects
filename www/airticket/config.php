<?php
$con= mysqli_connect("localhost","root","","airticket");
if($con)
{
	echo"run";
}
else
{
	echo "no";
}
?>