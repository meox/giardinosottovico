<?php

$list = array();
$i = 0;
$h = opendir("striscia/");
while(true)
{
	$r = readdir($h);
	if ($r == false)
		break;
	if (strstr($r, ".jpg") != false || strstr($r, ".png"))
		$list[$i++] = $r;
}
closedir($h);

$index = rand  (0, $i-1);
echo $list[$index]."<br />";

?>
