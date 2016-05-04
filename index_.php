<?php
$directories = glob('../apps/*' , GLOB_ONLYDIR);
foreach ($directories as $key => $value) {
	# code...
	echo $key." -> ".$value."<br>";

	#buscamos carpetas internas por cada directorio
	$internas = glob($value."/*" , GLOB_ONLYDIR);
	echo "<pre>";
	print_r($internas);
	echo "</pre>";
}
?>