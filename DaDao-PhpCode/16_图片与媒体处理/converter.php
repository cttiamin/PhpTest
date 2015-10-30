<?php
	function converter($pic,$toType){
	
	//得到原文件
	$type=strrchr($pic,'.'); 
	
	//对原文件类型进行判断，同时创建保存图像变量$im
	switch($type){
		//是否是JPEG类型
		case '.jpeg':
		case '.jpg':
			$im=imagecreatefromjpeg($pic); //将其输出
			break;
		case '.gif':
			$im=imagecreatefromgif($pic);
			break;
		case '.png';
			$im=imagecreatefrompng($pic);
			break;
		default:
			$im=false;
			echo "file can not loaded<br>";
			exit;
	}
	
	//目标类型进行判断，同时对原图像进行类型转换
	switch($toType){
	//是否是JPEG类型
	case 'jpeg':
	case 'jpg':
		imagejpeg($im,$pic.'.jpeg');
		break;
	//是否是GIF类型
	case 'gif':
		imagejpeg($im,$pic.'.gif');
		break;
	//是否是PNG类型
	case 'png';
		imagejpeg($im,$pic.'.png');
		break;
	//非以上三种类型，给出错误提示
	default;
		echo "toType error<br>";
		exit;
		
	}
	
	//给出转换成功的提示
	echo "convert successfully<br>";
}
	converter("phpzjm.jpg","gif");
	
?>