<?php

echo "Hello World <br>";

$var1 = 1;

$var2 = 2;

$var3 = $var1 + $var2;

echo $var3."<br/>";

for ($i=0;$i<=9;$i++)
{
	if ($i%2==0)
	{
		echo $i."---> Even <br/>";
	}
	else
	{
		echo $i."---> Odd <br/>";
	}
	
}

/*$var4 = 5;
$var5 = 5.0;
$var6 ="5";
echo "v4=".$var4 "v5=".$var5 "v6=".$var6 ;
*/
?>