<?php

$arr = [43,28,69,02,26,64,54,94,42,65];

$num = 256;
foreach ($arr as $value) {
	if ($num == $value) {
		$flag =1;
		break;
	}
}
if($flag == 1 )
{
	echo "element found";
}
else
{
	echo "element not found";
}


?>