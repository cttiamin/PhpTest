<?php
session_start();
foreach($_SESSION['numbers'] as $key=>$value){
	echo '$_SESSION['."'".$key."'".']='.$value."<br>";
}
?>