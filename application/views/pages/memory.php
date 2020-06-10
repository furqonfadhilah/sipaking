<?php
	
	echo "Memory awal : ".memory_get_usage(). "bytes"."<br>";

	for($i =0; $i<1000000; $i++){
		$array[] = md5($i);
	}for($i=0; $i<500000; $i++){
		unset($array[$i]);
	}

	echo "Memory yang digunakan untuk SIPAKING: " .memory_get_usage(). "bytes"."<br>";
	echo "Maksimum Memory Server localhost SIPAKING:".memory_get_peak_usage()."bytes "."<br>";
?>