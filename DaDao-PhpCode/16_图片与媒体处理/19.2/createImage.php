<?php
	$height=50;
	$width=50;
	//新建一个图像
	$im=imagecreatetruecolor($width,$height);
	header('content-type:image/png');
//发送到网页
imagepng($im)
?>
