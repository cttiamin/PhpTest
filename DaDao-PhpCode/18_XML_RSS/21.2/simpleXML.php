<?php
	$xml=file_get_contents('simple.xml');
	print_r(simplexml_load_string($xml));	
?>