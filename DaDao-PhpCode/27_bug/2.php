<?php
//选程包含文件，止 C:\aaa\kl.php
//$somefile=str_replace('/','@#!$^%',$_GET["somefile"]); //
$somefile=$_GET["somefile"];
include($somefile);
?>