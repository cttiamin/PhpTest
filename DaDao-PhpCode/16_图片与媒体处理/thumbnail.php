<?php
function ImageResize($srcFile,$dstW,$dstH){
	//得到图像信息
	$image= getimagesize($srcFile);
	//判断图像类型
	switch($image[2]){
		case 1:
			$im=imagecreatefromgif($srcFile);
			break;
		case 2:
			$im=imagecreatefromjpeg($srcFile);
			break;
		case 3:
			$im=imagecreatefrompng($srcFile);
			break;
	}
	//得到图像大小
	$srcW=imagesx($im);
	$srcH=imagesy($im);
	//创建新背景图像
	$tn=imagecreatetruecolor($dstW,$dstH);
	//拷贝原图像并改变大小
	imagecopyresampled($tn,$im,0,0,0,0,$dstW,$dstH,$srcW,$srcH);
	//将图像输出
	header("Content-type:image/jpeg");	
	imagejpeg($tn);
	
	//清除图像资源
	imagedestroy($tn);
	imagedestroy($im);
}
imageResize("phpzjm.jpg",220,220);
?>