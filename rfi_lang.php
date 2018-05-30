<?php
	echo("start\n");
	if ($handle = opendir('.')) {
		while (false !== ($entry = readdir($handle))) {
			if ($entry != "." && $entry != "..") {
				echo "$entry"."<br>";
			}
		}
		closedir($handle);
	}
	echo ("middle");
	$content = file_get_contents("index.php");
	echo base64_encode($content)."\n";
	echo("end\n");
?>