<?php
$s1=50;
$s2=55;
$s3=50;
$p=(($s1+$s2+$s3)/300)*100;
if ($s1>=33 && $s2>=33 && $s3>=33 )
{
	echo"pass in all subjects  and the percent. is".$p."<br>";
	if($p>=60)
	{
		echo"first division<br>";
	}
	else if($p<60 && $p>33)
	{
		echo"second division";
	}
}	
else if($s1<33 && $s2<33 && $s3<33)
{
	echo"fail in all subject";
}
else if($s1<33 && $s2<33)
{
	echo"s1 and s2 fail and percentage =".$p;

}
else if($s1<33 && $s3<33)
{
	echo"s1 and s3 are fail and percentage =".$p;
}
else if($s2<33 && $s3<33)
{
	echo"s2 and s3 fail and percentage=".$p;
}

else if($s1<33)
{
	echo"s1 fail and the percentage =".$p;
}

else if($s2<33)
{
	echo"s2 is fail and the percentage =".$p;
}
else if($s3<33)
{
	echo"s3 is fail and the percentage =".$p;
}


else
	{
		echo "fail";
}


?>