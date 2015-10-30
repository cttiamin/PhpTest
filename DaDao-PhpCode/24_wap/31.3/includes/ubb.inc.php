<?php
function ubb($str)
{
	$str  =  str_replace("\n","<br />",$str);
	return $str;
}