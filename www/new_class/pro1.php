<?php
$a=10;
$b=10;
$c=0;

if($a>$b && $a>$c)
{
	echo "a is greater";
}

else if($b>$a && $b>$c)
{
	echo "b is greater";
}
else if($a=$b)
echo "a and b  are equal";
else if ($b=$c)
 {
	echo "b and c are equal";
}
else if($c=$a)
{
	echo"c and a are equal";
}
else if($a=$b=$c)
{
	echo"a,b,c are equal";

}
else
{
echo "c is greater";
}
?>