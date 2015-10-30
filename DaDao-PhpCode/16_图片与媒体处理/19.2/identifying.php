<?php
session_start();
$width=40;
$height=16;
header("Content-type:image/gif");

$randval=randStr(4);
$im=imagecreatetruecolor($width,$height);

$r=array(255,215,235,195,175);
$g=array(255,215,235,195,175);
$b=array(255,215,235,195,175);

$key=rand(0,4);
$backColor=imagecolorallocate($im,$r[$key],$g[$key],$b[$key]);
$pointColor=imagecolorallocate($im,255,170,255);

imagefill($im,0,0,$backColor);
$stringColor=imagecolorallocate($im,255,61,153);

for ($i=0;$i<=100;$i++){
	$pointX=rand(2,$width-2);
	$pointY=rand(2,$height-2);
	imagesetpixel($im,$pointX,$pointY,$pointColor);
}

imagestring($im,3,5,1,$randval,$stringColor);
$ImageFun='Imagegif';
$ImageFun($im);

imagedestroy($im);
$_SESSION['identifying']=$randval;

function randStr($len=10){
	$chars='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	$string="";

	while (strlen($string)<$len) {
		$string.=substr($chars,(rand()%strlen($chars)),1);
	}
	return $string;
}
?>