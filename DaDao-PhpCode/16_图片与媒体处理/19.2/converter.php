<?php
function converter($pic,$toType){
	// 得到原文件类型
	$type=strrchr($pic,'.');
	// 对原文件类型进行判断，同时创建保存图像变量$im
	switch ($type){
		// 是否是JPEG类型
		case '.jpeg':
		case '.jpg':
			$im=imagecreatefromjpeg($pic);
			break;
		// 是否是GIF类型
		case '.gif':
			$im=imagecreatefromgif($pic);
			break;
		// 是否是PNG类型
		case '.png':
			$im=imagecreatefrompng($pic);
			break;
		// 非以上三种类型，显示错误提示
		default:
			$im=false;
			echo "file can not loaded<BR>";
			exit;
	}
	// 对目标类型进行判断，同时对原图像进行类型转换
	switch ($toType){
		// 是否是JPEG类型
		case 'jpeg':
		case 'jpg':
			imagejpeg($im,$pic.'.jpeg');
			break;
		// 是否是GIF类型
		case 'gif':
			imagejpeg($im,$pic.'.gif');
			break;
		// 是否是PNG类型
		case 'png':
			imagejpeg($im,$pic.'.png');
			break;
		// 非以上三种类型，给出错误提示
		default:
			echo "toType error<BR>";
			exit;
	}
	// 给出转换成功提示
	echo "convert successfully<BR>";
}
//converter("a1.aaa","png");
//converter("sunyang42.gif","ddd");
converter("sunyang42.gif","jpeg");
?>