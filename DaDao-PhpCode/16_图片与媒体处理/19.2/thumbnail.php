<?php
function ImageResize($srcFile,$dstW,$dstH){
	//得到图像信息
	$image = GetImageSize($srcFile);
	//判断图像类型
	switch ($image[2]) {
		case 1:
			$im = ImageCreateFromGIF($srcFile);
			break;
		case 2:
			$im = ImageCreateFromJpeg($srcFile);
			break;
		case 3:
			$im = ImageCreateFromPNG($srcFile);
			break;
	}
	//得到图像大小
	$srcW=ImageSX($im);
	$srcH=ImageSY($im);

	//创建新背景图像
	$tn = ImageCreateTrueColor($dstW,$dstH);
	//拷贝原图像并改变大小
	ImageCopyResampled($tn,$im,0,0,0,0,$dstW,$dstH,$srcW,$srcH);
	//将图像输出
	header("Content-type:image/jpeg");
	ImageJpeg($tn);

	//清除图像资源
	ImageDestroy($tn);
	ImageDestroy($im);
}
ImageResize("sunyang42.gif",60,40);
?>

