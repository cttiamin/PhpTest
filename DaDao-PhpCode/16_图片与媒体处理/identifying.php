<?php
session_start();   //开始会话
$width=40;
$height=16;
header("Content-type:image/gif");	//定义生成gif图像

$randval=randStr(4); //调用函数
$im=imagecreatetruecolor($width,$height); //创建一个真彩色的图片

$r=array(255,215,235,195,175);	//定义分别代表红绿蓝的数组
$g=array(255,215,235,195,175);
$b=array(255,215,235,195,175);

$key=rand(0,4);	//生成0-4的随机数，
$backColor=imagecolorallocate($im,$r[$key],$g[$key],$b[$key]);	//分别在$r,$g,$b 中选取五个,选取颜色
$pointColor=imagecolorallocate($im,255,170,255); //字体色

imagefill($im,0,0,$backColor);  //设置验证码背景颜色
$stringColor=imagecolorallocate($im,255,61,153);	//设置文本颜色

for($i=0;$i<=100;$i++){		//加入随机干拢效果
	$pointX=rand(2,$width-2);
	$pointY=rand(2,$height-2);
	imagesetpixel($im,pointX,$pointY,$pointColor);
}

imagestring($im,3,5,1,$randval,$stringColor); //加入验证码文本
$ImageFun='Imagegif';
$ImageFun($im);		//将图像资源清除

imagedestroy($im);
$_SESSION['identifying']=$randval	//选随机文本保存到session中

function randStr($len=10){		//定义随机生成验证码的函数
	$chars='ABCDEFGHRJKLMNOPQRSTUVWXYZasdfghjklqwertyuiopzxcvbnm01234456789';
	$string="";
	
	while(strlen($string)<$len){
		$string.=substr($chars,(rand()%strlen($chars)),1);
	}
	return $string;	
}

?>