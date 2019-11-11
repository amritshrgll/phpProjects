<?php
$h=30;
$m=39;
$a=20;
$c=55;
$e=70;
$p=(($h+$m+$a+$c+$e)/500)*100;

if($h>=30 && $m>=30 && $a>=30 && $c>=30 && $e>=30)
	{
		echo"pass and %=".$p;
	}
	else if($h<30 || $m<30)
	{
		echo "fail in physics and % is".$P;
	}
	else if($m<30)
	{
		echo"fail in maths and % is".$p;
	}
	else if($a<30)
	{
		echo"fail in physics and % is".$p;
	}
	else if($c<30)
	{
		echo"fail in chemistry aand % is".$p;
	}
	else if($e<30)
	{
		echo"fail in englissh and % is".$p;
	}
 else if ($p>=60)
	{
	 echo "<h1>"."first divison".$p."</h1>" ; 
	}
	else if($p<60 && $p>=40)
	{
		echo "<h1>"."second division".$p."</h1>";
	}
	else if($p<40 && $p>=30)
	{
		echo"third division".$p;
	}
	else
	{
		echo "fail";
	}

?>