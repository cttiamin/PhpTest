<?php
//得到原图像
$im = imagecreatefromjpeg('a1.jpg');

//新建和原图像等大的背景图像
$ri = imagecreatetruecolor(imagesx($im),imagesy($im));

//循环遍历原图像中每个点
for($i=0;$i<imagesy($im);$i++){
	for($j=0;$j<imagesx($im);$j++){
		
		//将当前点颜色取出
		$srcColor = imagecolorat($im, $j, $i);
		
		//对颜色进行反色处理
		$dstColor=(~$srcColor) & 0xFFFFFF;
		
		//使用反色后的颜色对当前点着色
		imagesetpixel($ri,$j,$i,$dstColor);
	}
}

//将处理后的图片输出到页面
header('Content-type: image/jpeg');
imagejpeg($ri);

//清除图像资源
imagedestroy($ri);
imagedestroy($im);
?>
