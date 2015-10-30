<?php
//echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";
//88/*{{{*/
/************************************************************
 * 　88 图像处理
 * 　2011-12-05 13:51   
 *
 *  相关函数：
 *  getimagesize() 获取图片信息
 *  imagecreatefrompng() 打开一个png图片
 *  imagesy()   高
 *  imagesx()   宽
 *  image_type_to_extension()   获得图像类型
 *  image_type_to_mime_type()   获得图像mime类型
 *  header("content-type:image/gif")
 *  imagecreatetruecolor()  创建真彩色图片
 *  imagecolorallocate($gif1, 225, 0, 0);
 *  imagecreate()   创建图片
 *  imagecolorallocate($jpeg1, 255, 0, 0); 定义颜色
 *  imagefill()     填充颜色
 *  
 * */
/*
echo "<pre>";
$imgInfo = getimagesize("pic/s.gif");
*/
//print_r($imgInfo);
/* 输出结果
Array
(
    [0] => 1600 //宽
    [1] => 1200 //高
    [2] => 2    //图片类型, 1:gif 2:jpeg 3:png
    [3] => width="1600" height="1200"
    [bits] => 8 //颜色倍数
    [channels] => 3 //颜色通道
    [mime] => image/jpeg    //图片类型 大类/小类
)
*/
//echo "<img src=\"pic/s.gif \" {$imgInfo[3]}>";
//echo "<br/>===============================";

/*
$img_png = imagecreatefrompng('pic/timeline.png');
echo "logo.png的高度是：".imagesy($img_png);
echo "logo.png的宽度是：".imagesx($img_png);
 */
/*
echo "<br/>";
echo image_type_to_extension($imgInfo[2])."<br/>";  //获得图像类型
echo "获得图像mime类型".image_type_to_mime_type($imgInfo[2]);
*/
/*
header("content-type:image/gif");
$gif_img = imagecreate(600, 600);
imagegif($gif_img);
 */

//header("content-type:image/gif"); //显示图片

//$gif_img = imagecreate(600, 600);
//imagecolorallocate($gif_img, 255, 0, 0);    //定义一个颜色元素,基于调色板定义颜色
//echo imagecolorstotal($gif_img);    //查看多少个元素
//imagegif($gif_img); //输出图片
/*
header("content-type:image/jpeg"); //显示图片
$jpg_img = imagecreatetruecolor(300, 300); //建立一个真彩色图片,
imagejpeg($jpg_img);
imagedestroy($jpg_img); //释放资源
 */
/*
header("content-type:image/gif");
$gif1 = imagecreate(500, 200);
$gif2 = imagecreate(500, 200);
$red = imagecolorallocate($gif1, 225, 0, 0);
imagegif($gif1);
 */
/*
header("content-type:image/jpeg");
$jpeg1 = imagecreatetruecolor(200, 600);
$red = imagecolorallocate($jpeg1, 255, 0, 0); //定义颜色
imagefill($jpeg1, 0, 0, $red);  //填充颜色
imagejpeg($jpeg1);
*//*}}}*/

//89/*{{{*/
/************************************************************
 * 　89 图像处理
 * 　2011-12-06 18:23   
 *
 *  相关函数：
 *  eval()  输出PHP代码
 *  
 *  说明：
 *  (1)显示图片,(2)
 * */


//echo '<pre>';
/*定义文件，判断文件是否存在
$fileName = "pic/200604250917032.jpg";
if(!file_exists($fileName))
{
    echo "<div style='border:solid 6px #dcdcdc; font-size:22px; line-height:1.8em '>文件不存在！</div>";
    exit;
}
*/
/* 第一种获得文件后缀名的方法
$imgInfo = getimagesize($fileName);
$base = image_type_to_extension($imgInfo[2]);
 */
/* 第二种获得文件后缀名的方法 
$base = strtolower(strrchr($fileName, '.'));
//echo $base; //显示图像不能有输出
 */
/* 第三种获得文件后缀名的方法 
$base = substr(strtolower(strrchr($fileName, '.')), 1);
echo $base;
*/

/*第四种
$imgInfo = getimagesize($fileName);
echo substr($imgInfo['mime'],6);
 */


/*最初的一种      判断图片
switch ($base)
{
case '.gif':
    $img = imagecreatefromgif($fileName);
    break;
case '.jpeg':
    $img = imagecreatefromjpeg($fileName);
    break;
case '.jpg':
    $img = imagecreatefromjpeg($fileName);
    break;
case '.png':
    $img = imagecreatefrompng($fileName);
    break;
default:
    die("错误：文件类型不对！");
}
 */
/* 显示图片处理，显示时不能用输出
header("content-type:image/jpeg");
imagejpeg($img);
*/

/* 第五种 
$imgInfo = getimagesize($fileName);
$base = substr(strrchr($imgInfo['mime'],'/'),1);
//echo $base;
//eval('echo "<pre>"; print_r(array(1,2,3,4,5,6)); ');
eval('$img = imagecreatefrom'.$base.'($fileName);');
//var_dump($img);
header('content-type:image/jpeg');
imagejpeg($img);
 */

//fopen("image.txt",'w');

/*  从文本建立图像
$str = file_get_contents('image.txt');
$img = imagecreatefromstring($str); //建立资源
header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);
 */
/*查看gd库信息 
echo "<pre>";
print_r(gd_info());
*//*}}}*/

//90/*{{{*/
/************************************************************
 * 　90 颜色或图像填充及不同填充方式
 * 　2011-12-07 11:56   
 *
 *  相关函数：
 *  
 *  
 *  说明：
 *  (1)
 * */

/* 图片叠加， 透明
$img = imagecreatetruecolor(300, 300);
//$img2 = imagecreate(300, 300);
//$red = imagecolorallocate($img, 255, 0, 0);

$red = imagecolorallocate($img, mt_rand(0,255),  mt_rand(0,255),  mt_rand(0,255));  //随机颜色
//imagefill($img, 20, 0, $red);

$alpah_color = imagecolorallocatealpha($img, 0, 0, 255, 120);   //透明颜色
imagefill($img, 20, 0, $alpah_color);
$jpg = imagecreatefromjpeg('pic/200604250917040.jpg');
imagecopy($jpg, $img, 0, 0, 0, 0, 300, 300);

header("content-type:image/jpeg");
imagejpeg($jpg);
*/

/*
$img = imagecreatetruecolor(500, 300);
$green = imagecolorallocate($img, 0, 255, 0);
imagefill($img, 110, 0, $green);
header("content-type:image/jpeg");
imagejpeg($img);
*/

/* 填充颜色 
$img = imagecreatefromjpeg("pic/200604250917040.jpg");
$green = imagecolorallocate($img, 200, 122, 0);
imagefill($img, 500, 0, $green); // 
$border = imagecolorat($img, 316, 49);
imagefilltoborder($img, 0, 0, $border, $green);
header('content-type:image/jpeg');
imagejpeg($img);
*/
/*
$img = imagecreatefromgif('pic/s.gif');
$img2 = imagecreatetruecolor(500, 500);
$img2 = imagecreatefromjpeg('pic/200604250917040.jpg');
imagesettile($img2, $img);     //设定用于填充的贴图
$blue = imagecolorallocate($img2, 0, 0, 111);//为一幅图像分配颜色, $, int $red , int $green , int $blue ,
imagefill($img2, 0, 0, IMG_GOLOR_TILED); //区域填充 (resource $image , int $x , int $y , int $color )
header('content-type:image/jpeg');
imagejpeg($img2);
imagedestroy($img2);
*//*}}}*/

//91/*{{{*/
/************************************************************
 * 　91 画线&定义线样式&宽度&风格&笔刷
 * 　2011-12-07 17:36   
 *
 *  相关函数：
 * */

/* 画线
$img = imagecreatetruecolor(600, 600);  //创建
$color1 = imagecolorallocate($img, 24, 177, 121); //分配绿颜色
$white = imagecolorallocate($img, 255, 255, 255); //分配白颜色 
$color2 = imagecolorallocate($img,208,223,38);  //分配黄颜色 
$color3 = imagecolorallocate($img,35,95,200);   //分配蓝颜色 
imagefill($img,0,0,$color1);        //全部填充

imageline($img, 0, 0, 600, 600, $white); //画一条线段 白
//(resource $image, int $x1, int $y1, int $x2, int $y2, int $color )
//从坐标 $x1,$y1到$x2,$y2画一条线
imageline($img,600,0,0,600,$color2); //画一条线段 黄
imageline($img,50,300,550,300,$color3); //画一条线段 蓝
imageline($img,60,0,600,520,$white); //画一条线段 白

for($i=0;$i<=150;$i++){
	$x1 = mt_rand(0,200);
	$y1 = mt_rand(0,300);
	$x2 = mt_rand(0, 400);
	$y2= mt_rand(0,200);
	$color[] = imagecolorallocate($img, 255, 0, 0);
	$color[] = imagecolorallocate($img, 0, 255,0);
	$color[]= imagecolorallocate($img, 0, 0, 255);
	$color[]=$color1;
	$color[] = $color2;
	$color[] = $color3;
	$key = array_rand($color);
	imageline($img, $x1, $y1, $x2, $y2, $color[$key]);
}

header('content-type:image/jpeg');
imagejpeg($img);
*/

/*定义线样式 画一虚线 
$img = imagecreatetruecolor(300,600);
$red = imagecolorallocate($img, 255, 0, 0);
imagedashedline($img, 0, 0, 300,600,$red ); //画一虚线

header("content-type:image/jpeg");
imagejpeg($img);
 */

/* 定义线样式&宽度 
$img = imagecreatetruecolor(800, 300);
$red = imagecolorallocate($img, 255, 0, 0); //分配红颜色
$white = imagecolorallocate($img, 255, 255, 255); //分配白颜色
$blue = imagecolorallocate($img, 0, 255, 80);   ////分配蓝颜色
$style = array($red,$red,$red,$red,$red,$red,$red,$red,$red,$red,$red,$red,$red,$red,$white,$white,$white,$white,$white,$white,$white,$white,$white,$blue,$blue,$blue,$blue);
//红14，白9，蓝4
imagesetstyle($img, $style); //设定画线的风格
imagesetthickness($img, 35);  //设定画线的宽度
imageline($img, 0, 0, 800, 300, $red);
header("content-type:image/jpeg");
imagejpeg($img);
*/

/* 测试不成功 笔刷
$img = imagecreatetruecolor(600, 600);
$pix = imagecreatetruecolor(50, 50);
$yellow = imagecolorallocate($pix, 255, 255,0);
imagefill($pix, 0, 0, $yellow);
$pix = imagecreatefromjpeg("pic/pix.jpg");
imagesetbrush($img, $pix);
imageline($img, 50, 50, 400, 50, IMG_COLOR_BRUSHED);
header("content-type:image/jpeg");
imagejpeg($img);
*//*}}}*/

//92/*{{{*/
/************************************************************
 * 　92 绘制像素及矩形图
 * 　2011-12-07 20:37   
 *
 *  相关函数：
 *
 *  说明：
 *  (1)验证码背景图片
 * */

/* 验证码背景图片
$img = imagecreatetruecolor(80, 20);
$jpg = imagecreatefromjpeg("pic/pix.jpg");
$w = imagesx($img); //返回 $img 所代表的图像的宽度
$h = imagesy($img); //返回 $img 所代表的图像的高度
$jpg_w = imagesx($jpg);
$jpg_h = imagesy($jpg);
//imagecopy($img, $jpg, 0, 0, mt_rand(0, $jpg_w), mt_rand(0, $jpg_h), $w, $h);
$white = imagecolorallocate($img, 255, 255, 255);   //白色
imagefill($img, 0, 0, $white);  //填充$img白色底

//加入边框
$color_line = imagecolorallocate($img, 180, 180, 180);  //边框颜色
imageline($img, 0, 0, $w, 0, $color_line);  //上
imageline($img, $w-1, 0, $w-1, $h-1, $color_line);  //右
imageline($img, $w-1, $h-1, 0, $h-1, $color_line);  //下
imageline($img, 0, 0, 0, $h-1, $color_line);    //左

for($i = 0;$i<30;$i++){
	$color = imagecolorallocate($img, mt_rand(0,255),  mt_rand(0,255),  mt_rand(0,255));    //随机颜色
    $color_apa = imagecolorallocatealpha($img, mt_rand(0,255),  mt_rand(0,255),  mt_rand(0,255),mt_rand(50, 110));    //透明度50,110
    //画一个点
    for($j=0;$j<10;$j++){   
        //画一个单一像素,
        //( resource $image , int $x , int $y , int $color )
    	imagesetpixel($img, mt_rand(0, $w), mt_rand(0, $h), $color);
    }
    //画线 
    imageline($img, mt_rand(0, $w), mt_rand(0, $h), mt_rand(0, $w), mt_rand(0, $h), $color_apa);
}

$color = imagecolorallocate($img, mt_rand(0,255),  mt_rand(0,255),  mt_rand(0,255));    //随机颜色
$color_apa = imagecolorallocatealpha($img, mt_rand(0,255),  mt_rand(0,255),  mt_rand(0,255),mt_rand(50, 110));    //透明度50,110

header("content-type:image/jpeg");
imagejpeg($img);
 */

/* 画一个矩形验证码背景  
$rec_img = imagecreatetruecolor(100, 30);
$yellow = imagecolorallocate($rec_img, 255, 255, 0);    //黄色
$black = imagecolorallocate($rec_img, 0, 0, 0);     //黑色
imagefill($rec_img,0, 0, $yellow);      //添加黄色

//画一个矩形
//(resource $image, int $x1, int $y1, int $x2, int $y2 , int $col)
//imagerectangle($rec_img, 0, 100, 400, 400, $black);

$w = imagesx($rec_img); //宽
$h = imagesy($rec_img); //高

for ($i=0;$i<50;$i++){
    //定义透明
	$color_apa = imagecolorallocatealpha($rec_img, mt_rand(0,255),  mt_rand(0,255),  mt_rand(0,255),mt_rand(50, 110));
    imagesetthickness($rec_img, mt_rand(1, 5)); //设定画线的宽度
    //画矩形
	imagerectangle($rec_img, mt_rand(0, $w), mt_rand(0,$h), mt_rand(0, $w), mt_rand(0,$h), $color_apa);
}
header("content-type:image/jpeg");
imagejpeg($rec_img);
 */

/*画矩形并填充透明颜色
$filename = 'pic/g.jpg';
$img = imagecreatefromjpeg($filename);
$imgInfo = getimagesize($filename); //获取图
$blue = imagecolorallocate($img, 0,0,200);  //定义蓝色
imagefilledrectangle($img, 0, 0, 100, 100, $blue); //画一矩形并填充
for($i=0;$i<20;$i++){
    //定义透明度
    $color = imagecolorallocatealpha($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255), mt_rand(30, 127));
    //画一矩形并填充
	imagefilledrectangle($img, mt_rand(0, $imgInfo[0]), mt_rand(0, $imgInfo[1]), mt_rand(0, $imgInfo[0]), mt_rand(0, $imgInfo[1]), $color);
}
header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);
*//*}}}*/

//93/*{{{*/
/************************************************************
 * 　93 16进制颜色原理 反向图片原理 2进制 8 进制 16进制原理
 *       操作图像像素与获得颜色信息
 * 　2011-12-07 21:52   
 *
 *  相关函数：
 *
 * */

/*
$img = imagecreatetruecolor(500,500);
$red = imagecolorallocate($img,255,0,0); //红色
imagefill($img,0,0,$red);   //填充
header("content-type:image/jpeg");
imagejpeg($img,null,30);
 */

/* 测试不通
$img= imagecreatefrompng("pic/timeline.png");
//header("content-type:image/png");
imagepng($img,"pic/nav-icons.png");
*/

/* 画矩形 
$img2 = imagecreatetruecolor(200, 200);
$red = imagecolorallocate($img2, 255, 0, 0);
//设定画线的宽度10像素
imagesetthickness($img2, 10);   
imagerectangle($img2, 10, 10, 180, 180, $red); //画空心矩形,
header("content-type:image/png");
//resource $image [, string $filename ]
//显示图片，输出指定文件为空
imagepng($img2,NULL);
*/

/*  
$color1 = "#3E37DF";
//十六进制转换为十进制
$red = hexdec(substr($color1,1,2)); //截取从2位开始,留2位; 3E 
$green = hexdec(substr($color1,3,2)); //截取从3位开始,留2位; 37
$blue = hexdec(substr($color1,5,2)); //截取从5位开始,留2位; DF
$img = imagecreatetruecolor(500, 500); 
$color2 = imagecolorallocate($img, $red, $green, $blue);
imagefill($img,0,0,$color2);
header("content-type:image/png");
imagepng($img);
*/

/* 十进制转换为二进制 
echo decbin(10);
*/
/*
$img = imagecreatefrompng("pic/timeline.png");
//取得像素的颜色索引值
$index = imagecolorat($img, 16, 36);
//十进制转换为十六进制
//echo dechex($index);
//取得某索引的颜色
$color_arr = imagecolorsforindex($img, $index);
var_dump($color_arr);
 */

/* 获取颜色值
$gif = imagecreatefrompng("pic/timeline.png");
//取得某像素的颜色索引值 ($,x,y)
$index = imagecolorat($gif, 46, 18);
print_r($index."<br/>");
//取得某索引的颜色
$color_arr = imagecolorsforindex($gif,$index);
print_r($color_arr);

echo  "<br/>".hexdec(substr(dechex($index),0,2))."<br/>";
echo  hexdec(substr(dechex($index),2,2));
echo "<br/>====================<br/>";
var_dump($color_arr);
 */

/*
error_reporting(0); //关闭PHP报错提示
$bin =  decbin(hexdec(FFFFFF));
echo strlen($bin);
 */
/*
error_reporting(0); //关闭PHP报错提示
$white = FFFFFF;
$bin =  decbin(hexdec($white));
echo bindec(~$bin); //取返，~位操作符
 */

/* 显示反向颜色(无意义) 
set_time_limit(0);  //无休止执行
$img = imagecreatefrompng("pic/nav-icons.png");
for($x=0;$x<imagesx($img);$x++){
	for($y=0;$y<imagesy($img);$y++){
		$old_color = imagecolorat($img,$x,$y);
		$new_color = (~$old_color) & 0xffffff;
		imagesetpixel($img, $x, $y, $new_color);
	}	
}
header("content-type:image/jpeg");
imagejpeg($img);
 */

/* 进制转换函数
 * dechex()10-16  decbin()10-2  decoct()10-8
hexdec()16-10  bin2hex()2-16  bindec()2-10   octdec() 8-10
 *//*}}}*/

//94/*{{{*/
/************************************************************
 * 　94 画圆 弧线 网站饼状统计图绘制
 * 　2011-12-08 12:04   
 *
 *  相关函数：
 *
 * */

/* 画空心圆，实心圆
$img = imagecreatetruecolor(500, 500);
$red = imagecolorallocate($img, 255, 0, 0);//红色
$white =  imagecolorallocate($img, 255, 255, 255);//白色
imagefill($img, 0, 0, $white);  //全部填充白色
//画一个椭圆 
//(resource $image, int $cx, int $cy, int $w, int $h, int $color)
//x:250 y:250为中心 w:480 h:481 的圆形, 蓝色
imageellipse($img, 250, 250, 480,481, imagecolorallocate($img,0,0,255));
//画一椭圆并填充
//x:250 y:250为中心 w:50 h:50 的圆形, 红色
imagefilledellipse($img, 250, 250,50, 50, $red);
header("content-type:image/jpeg");
imagejpeg($img);
*/
//function imagejpeg($img,$saveFile=NULL,$b)


/* 多个透明度椭圆 
$img2 = imagecreatetruecolor(600,400);
$color_arr = array(12,133,221,60,33,188,232);
for ($i=0;$i<20;$i++){
	$color = imagecolorallocatealpha($img2,$color_arr[array_rand($color_arr)],$color_arr[array_rand($color_arr)],$color_arr[array_rand($color_arr)],20);	
	$x = mt_rand(20, imagesx($img2));
	$y = mt_rand(20, imagesy($img2));
	imagefilledellipse($img2, $x, $y, mt_rand(50,200),  mt_rand(50,200), $color);
}
header("content-type:image/png");
imagepng($img2);
*/

/* 椭圆弧   有点小问题
$img= imagecreatetruecolor(600, 600);
imagefill($img, 11, 11, imagecolorallocate($img,255, 255, 255));
$red = imagecolorallocate($img, 255, 0, 0); 
//imagearc($img, 300, 300, 400, 200, 0, 360,$red);
for($i=0;$i<20;$i++){
    $red = imagecolorallocate($img, 255+$i*5, 0, 0); //红色
    //画一椭圆弧且填充 
    //(resource $image, int $cx, int $cy, int $w, int $h, int $s, int $e, int $color, int $styles)
    //($, 中心宽, 中心高, 宽, 高, 角度起始点, 角度结束点 )
    //IMG_ARC_PIE  IMG_ARC_NOFILL
    imagefilledarc($img, 300, 300+$i, 400, 60,0,270, $red, IMG_ARC_PIE);
}
header("content-type:image/png");
imagepng($img);
imagedestroy($img);
*/

/*  
$img= imagecreatetruecolor(600, 600);
imagefill($img, 11,11, imagecolorallocate($img, 255, 255, 255)); //白背景

//小张  ：60   小李  200  小王：100
for ($i=0;$i<20;$i++){
    //小张
    //画一椭圆弧且填充
    //($, int $cx, int $cy, int $w, int $h, int $s, int $e, int $color, int $style )
	imagefilledarc($img, 300, 300-$i, 300, 60, 0, 60, imagecolorallocate($img, 111+$i*4, 0, 0), IMG_ARC_PIE);
	//小李
	imagefilledarc($img, 300, 300-$i, 300, 60, 60, 260, imagecolorallocate($img, 100+$i*4, 100+$i*4, 0), IMG_ARC_PIE);
	//小王
	imagefilledarc($img, 300, 300-$i, 300, 60, 260, 360, imagecolorallocate($img, 120+$i*4, 0, 120+$i*4), IMG_ARC_PIE);
}
header("content-type:image/png");
imagepng($img);
imagedestroy($img);
*/
/* 统计图  
$img= imagecreatetruecolor(600, 600);
imagefill($img, 11,11, imagecolorallocate($img, 255, 255, 255));
$ip = array("baidu"=>500,"google"=>1000,"sohu"=>800,"sina"=>1200,"youdao"=>666,"houdunwang"=>555,"taobao"=>333,"yahoo"=>999);
asort($ip);
//创建颜色数组
$colorArr=array();
for($i=0;$i<10;$i++){
	$colorArr[]=imagecolorallocate($img, mt_rand(0, 200), mt_rand(0, 200), mt_rand(0, 200));
}
//绘制统计图
$r1=$r2=$j=0;
foreach ($ip as $k=>$v){
	$r1 = $j==0?0:$r2;
	$r2 = $j==0?$v/array_sum($ip)*360:$v/array_sum($ip)*360+$r1;
	$r2= min(360,ceil($r2));
	//echo "\$r1=>{$r1} \$r2=>{$r2}<br/>";
	$arc_str.= "imagefilledarc(\$img, imagesx(\$img)/2, imagesy(\$img)/2-\$i, 300, 60, {$r1}, {$r2}, {$colorArr[$j]}, IMG_ARC_PIE);\n";
	$j++;
}

for($i=0;$i<20;$i++){
	eval($arc_str);
}

header("content-type:image/png");
imagepng($img);
 *//*}}}*/

/************************************************************
 *{{{ 　95 绘制多边行及文字绘制    
 * 　2011-12-08 18:34 星期四  史各庄 
 *
 * */

/* 画一个多边形 
$img = imagecreate(500, 500);
$color1 = imagecolorallocate($img, 121, 32, 123);
$white = imagecolorallocate($img, 255, 255, 255);//定义白颜色
//$points = array(10,10,490,10,490,490,10,490);
//画一多边形,用线表示
//imagepolygon($img, $points, 3, $white);
$points = array(
    250,460,    //第1个点
    490,490,    //第2个点
    10,490,     //第3个点
    32,22,      //第4个点
    33,55,      //第5个点
    111,333,    //第6个点
    222,444     //第7个点
);
//imagepolygon($img, $points, 7, $white);
//画一多边形并填充($, 数组, 点数, 颜色)
imagefilledpolygon($img, $points, 7, $white);
header("content-type:image/png");
imagepng($img);
*/

/* 图片中输入字符 
$img = imagecreate(500, 500);
$color1 = imagecolorallocate($img, 121, 32, 123);
$white = imagecolorallocate($img, 255, 255, 255);
$str = "http://jm088.com";  
$str_len = strlen($str);    //取长度

for($i=0;$i<$str_len;$i++){
    $char = substr($str,$i,1);
    //水平地画一个字符
    //($, int $font(1-5) , int $x , int $y , string $c , int $color)
    imagechar($img, 5, 10+$i*10, 10+$i*5, $char, $white);
}

$str_len = strlen($str);
//echo $str_len;
for($i=$str_len-1; $i>=0;$i-- ){
    //垂直地画一个字符
    //($, int $font(1-5) , int $x , int $y , string $c , int $color)
    imagecharup($img, 5, 10, 500-$i*10, $str[$i], $white);
}
header("content-type:image/png");
imagepng($img);
*/
/*
$img = imagecreate(500, 500);
$color1 = imagecolorallocate($img, 121, 32, 123);
$white = imagecolorallocate($img, 255, 255, 255);
//水平地画一行字符串
//($, int $font(1-5) , int $x , int $y , string $c , int $color)
imagestring($img, 5, 10, 10, "skskskskalsd", $white);
header("content-type:image/png");
imagepng($img);
*//*}}}*/

/************************************************************
 * 　96 扩展库的相关函数 {{{
 * 　2011-12-08 19:21 星期四  史各庄 
 *
 * */

//echo "<pre>";
//var_dump(get_loaded_extensions());//查看开启哪些扩展库
//var_dump(get_extension_funcs('mysql'));//获取扩展库中的函数
/* 判断函数库是否加载 
if(!get_extension_funcs('gd'))
{
    echo "GD库没有加载, 无法进行图像处理";
    exit();
}
*//*}}}*/

/************************************************************
 * {{{　97 获得文字宽高属性&图片水印函数功能
 * 　2011-12-08 19:21 星期四  史各庄 
 *
 * */

/* 读取图片 写入字体
$img = imagecreatefromjpeg("pic/g.jpg");
$black = imagecolorallocate($img, 0, 0, 0);
imagestring($img, 5, 100, 0, "http://bbs.houdunwang.com", $black);
header("Content-type:image/jpeg");
imagejpeg($img);
 */

/* 创建图片 写入字体
$img2 = imagecreatetruecolor(162, 15);
$white = imagecolorallocate($img2, 122, 122, 221);
imagefill($img2,10, 0, $white);
$string= "www.houdunwang.com";
$str_len = strlen($string);
$w = imagefontwidth(5);
$h = imagefontheight(5);
//echo "\$w=>".$w."\$h=>".$h."<br/>";
//echo "水印的宽度：".$w*$str_len;
//echo "<br/>水印的高度：".$h;
$color = imagecolorallocate($img2, 0, 0, 0);
imagestring($img2, 5,0, 0, $string, $color);
header("Content-type:image/jpeg");
imagejpeg($img2);
imagedestroy($img2);
*/

/**
 * 简单的加水印函数
 * @param	$r_img 原图
 * @param   $d_img 目标图
 * @return  boolen 成功为真
 */
/*
function water($r_img, $d_img='', $pos=1, $pct = 80, $str="jm088.com",$color="#276EB7", $f_size=5){
	/**
	 * 1 是否支持GD库，文件是否存在，是否是一下图片
	 * 2 获得水印的宽度和高度，如果水印的宽度大于图片，就不加水印
	 * 3 获得文字颜色（定义文字的颜色 ）
	 * 4 获得加水印的x,y坐标，10种加水印的情况
	 * 5 写入文字
	 * 6 储图片
	 * 7 销毁资源 
	
	if(extension_loaded("gd")&& file_exists($r_img)&& getimagesize($r_img)){
		$str_len = strlen($str);
		//水印的宽度
		$w = imagefontwidth($f_size)*$str_len;
		//水印的高度
		$h = imagefontheight($f_size);
		//获得图像的信息
		$i_info = getimagesize($r_img);
		if($i_info[0]<$w && $i_info[1]<$h){
			return false;
		}
		switch ($i_info[2]){
			case 1:
				$img =imagecreatefromgif($r_img);
				break;
			case 2:
				$img =imagecreatefromjpeg($r_img);
				break;
			case 3:
				$img =imagecreatefrompng($r_img);
				break;
			default:
				return false;
		}
		//得到文字颜色 
		if(strlen($color)!=7)return false;
		$f_color = imagecolorallocate($img,hexdec(substr($color, 1,2)), hexdec(substr($color, 3,2)), hexdec(substr($color, 5,2)));
		//x，y坐标
		switch($pos){
			case 1:
				$x=8;
				$y=8;
				break;
			case 2:
				$x = ($i_info[0]-$w)/2;
				$y= 8;
				break;
			case 3:
				$x = $i_info[0]-$w;
				$y= 8;
				break;
			case 4:
				$x = 8;
				$y= $i_info[1]/2;
				break;
			case 5:
				$x = ($i_info[0]-$w)/2;
				$y= $i_info[1]/2;
				break;
			default:
				$x = mt_rand(8,($i_info[0]-$w));
				$y = mt_rand(8,($i_info[1]-$h));
		}
		imagestring($img, $f_size, $x, $y, $str, $f_color);
		$d_img = $d_img!=''?$d_img:$r_img;
		//写入图像
		switch ($i_info[2]){
			case 1:
				imagegif($img,$d_img);
				break;
			case 2:
				imagejpeg($img,$d_img,$pct);
				break;
			case 3:
				imagepng($img,$d_img);
				break;
		}
		imagedestroy($img);
		return true;
	}
	return false;
}


if(water("pic/g.jpg","pic/nav-icons.png",15)){
	echo "加水印了";
}else{
	echo "没有添加水印";
}

*/

/*}}}*/

/************************************************************
 * 　98 处理文字及获得文字尺寸属性{{{
 * 　2011-12-08 19:21 星期四  史各庄 
 *
 * */
/*
$img = imagecreatetruecolor(300, 300);
$bg_color = imagecolorallocate($img, 124, 212, 111);
imagefill($img, 0, 11, $bg_color);
$back = imagecolorallocate($img, 0, 0, 0);
//imagestring($img, 5, 0, 0, 'jm088.com', $black);//不能输出中文
$fontfile = 'pic/simkai.ttf';
//用 TrueType 字体向图像写入文本
//resource $image , float $size , float $angle(斜度), int $x , int $y , int $color , string $fontfile , string $text 
//默认utf-8,若gbk. iconv('gbk', 'utf-8', "$str");
$c = imagettftext($img, 20, 9, 20, 80, $back, $fontfile, '健民网');
//取得使用 TrueType 字体的文本的范围($,loat $angle , string $fontfile , string $text  )
$c = imagettfbbox(20,0, $fontfile, "可可中国可中国可可中国可中国");
echo "<pre>";
//顺序：左下， 右下，左上，右上
var_dump($c);
echo "我们刚写的三个字的尺寸:<br/>";
echo "宽度：".($c[2]-$c[6])."<BR/>";
echo "高度：".abs($c[3]-$c[7]);//abs: 取绝对值
*/
/*
header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);
 *//*}}}*/

/************************************************************
 *{{{ 　99 面向对像OOP思想实现图形验证码
 * 　Last Change: 2011-12-10 12:40 Thursday
 *   Addr:史各庄 
 *   Maintainer: JiaMing Zhang
 * */

/* 主页面
class checkcode
{
    private $img;//资源
    public $width = 85;//画布宽度
    public $height = 25;//画面高度
    public $bg_color = "#DCDCDC";//背景颜色
    public $code;//验证码
    //验证码的随机种子
    public $code_str = "329832983DSDSKDSLKQWEWQ2lkfDSFSDjfdsfdsjwlkfj93290KFDSKJFDSOIDSLK";
    public $code_len = 4;//验证码长度
    public $font;//验证码字体
    public $font_size = 16;//验证码字体大小
    public $font_color = "#000000";//验证码字体颜色 

    public function __construct()
    {
        $this->font = "pic/".DIRECTORY_SEPARATOR.'msyh.ttf';
    }
    //生成验证码
    private function create_code()
    {
        $code = '';
        for($i=0; $i<$this->code_len; $i++)
        {
            $code.= $this->code_str[mt_rand(0, strlen($this->code_str)-1)];
        $this->code = $code;
        }
    }
    //返回验证码
    public function getcode()
    {
        return strtoupper($this->code);//转换大写
    }
    //建画布
    public function getimage()
    {
        $w = $this->width;
        $h = $this->height;
        $bg_color = $this->bg_color;
        if(!$this->checkgd())return false; //验证GD库
        $img = imagecreatetruecolor($w, $h);
        $bg_color = imagecolorallocate($img, hexdec(substr($bg_color, 1, 2)), hexdec(substr($bg_color, 3, 2)), hexdec(substr($bg_color, 5, 2)));   //分配一个颜色
        imagefill($img, 0, 0, $bg_color); //上色
        $this->img = $img;  
        $this->create_font();   //写入文字
        $this->create_pix();    //画线
        $this->show_code();     //显示验证码
    }
    //写入验证码文字
    public function create_font()
    {
        $this->create_code();   //生成验证码
        $color = $this->font_color;
        $font_color = imagecolorallocate($this->img, hexdec(substr($color, 1, 2)), hexdec(substr($color, 3, 2)), hexdec(substr($color, 5, 2)));
        $x = $this->width/$this->code_len;
        for($i=0; $i<$this->code_len; $i++)
        {
            //用 TrueType 字体向图像写入文本
            //($, 字体大小,斜度,横,竖,颜色,字体样式,文字)
            imagettftext($this->img, $this->font_size, mt_rand(-30, 30), $x*$i+mt_rand(3,6), mt_rand($this->height/1.2, $this->height-5), $font_color, $this->font, $this->code[$i]);
        }
        $this->font_color = $font_color;
    }
    //画线
    private function create_pix()
    {
        $pix_color = $this->font_color;
        for($i=0; $i<100; $i++)
        {
            //画点
            imagesetpixel($this->img, mt_rand(0, $this->width), mt_rand(0, $this->height), $pix_color);
        }
        for($j=0; $j<5; $j++)
        {
            //设置线的宽度
            imagesetthickness($this->img, mt_rand(0,2));
            //画线
            imageline($this->img, mt_rand(0, $this->width), mt_rand(0, $this->height), mt_rand(0, $this->width), mt_rand(0, $this->height), $pix_color);
        }
    }
    //显示验证码
    private function show_code()
    {
        header("Content-type:image/png");
        imagepng($this->img);
        imagedestroy($this->img);//释放
    }
    //验证GD库是否打开,imagepng函数是否可用
    private function checkgd()
    {
        return extension_loaded('gd') && function_exists('imagepng');
    }
}
 */

/* 测试 
function __autoload($classname)
{
    include $classname.'.php';
}
include 'checkcode.class.php';
*/
/* 
$code = new checkcode();
$code->bg_color = "#2E5786";
$code->font_color = "#ffffff";
$code->getimage();
*//*}}}*/

/************************************************************
 * {{{　100 imagecopymerge imagecopy imagerotate
 * 　Last Change: 2011-12-10 13:58 Saturday
 *   Address : 史各庄 
 *   Maintainer: JiaMing Zhang
 * */

/* 用给定角度旋转图像 
$jpg = imagecreatefromjpeg("pic/g.jpg");
$bgd_color = imagecolorallocate($jpg,255,255,0);
$img = imagerotate($jpg, 30, $bgd_color);
header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);
 */

/*适用于边角有透明的图片  
 *测试不通
$png = imagecreatefrompng("pic/p.png");
$bg_color = imagecolorallocate($png, 255,0, 0);
//将某个颜色定义为透明色,得到透明色的索引
$index = imagecolortransparent($png);
echo $index;
exit();
$img = imagerotate($png, 20, $bg_color);
*/
/*
if($index>=0){
	$rgb = imagecolorsforindex($png, $index);
	var_dump($rgb);
	imagecolorset($png, $index, 255, 0, 0);
}
echo "<pre>";
var_dump($index);
$bg_color=imagecolorallocate($png,$rgb['red'],$rgb['green'],$rgb['blue']);
$img = imagerotate($png, 20, $bg_color,0);
header("content-type:image/png");
imagegif($img);
 */

/*  在图片上加 透明水印 效果不错 
$jpg = imagecreatefromjpeg('pic/g.jpg');
//$gif = imagecreatefromgif('logo.gif');
//$b = imagecreatefromjpeg('b.jpg');
$logo = imagecreatefromgif("pic/s.gif");
//imagecopy($jpg, $b, 20, 220, 0, 0, imagesx($b),imagesy($b));

//加水印($im, $logo, $x, $y, 0:目标图x, 0:目标图y, imagesx($stamp)水印宽度, imagesy($stamp)水印高度, 50:溶和度); 
imagecopymerge($jpg, $logo, (imagesx($jpg)-imagesx($logo))/2, (imagesy($jpg)-imagesy($logo))/2, 0, 0, imagesx($logo), imagesy($logo), 50);
header("Content-type:image/jpeg");
imagejpeg($jpg);
}}} */

/************************************************************
 * {{{　101 图像拷贝缩略图原理imagecopymergegray imagecopyresampled
 * 　Last Change: 2011-12-10 13:58 Saturday
 *   Address : 史各庄 
 *   Maintainer: JiaMing Zhang
 * */

/*  截图覆盖
$img = imagecreatetruecolor(500, 500);
$filename = 'pic/a.jpg';
!file_exists($filename)? die("文件不存在...无法进行操作"):'';
$jpg = imagecreatefromjpeg($filename);
//$img = imagecreatefromjpeg($filename);
//用灰度拷贝并合并图像的一部分;把目标图像转换成灰度,把原图像叠在上面
//($dst_im, resource $src_im, int $dst_x, int $dst_y, int $src_x, int $src_y , int $src_w , int $src_h , int $pct:透明度 )
imagecopymergegray($img, $jpg,0, 0, 0, 0, imagesx($jpg), imagesy($jpg),10);
header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);
imagedestroy($jpg);
 */

/*  
$img = imagecreatetruecolor(300, 300);
$jpg= imagecreatefromjpeg('pic/a.jpg');
//重采样拷贝部分图像并调整大小
//( resource $dst_image , resource $src_image , int $dst_x , int $dst_y , int $src_x , int $src_y , int $dst_w , int $dst_h , int $src_w , int $src_h )
imagecopyresampled($img, $jpg, 30, 50, 0,0,300, 300, imagesx($jpg),imagesy($jpg)-100);
header("content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);
imagedestroy($jpg);
*/

/*等比例缩放图片
function resize($filename,$out_filename='',$w=200,$h=200){
	$jpg = imagecreatefromjpeg($filename);
	$s_w = imagesx($jpg);
	$s_h = imagesy($jpg);
	if($s_h>$s_w){ //计算比例
		$n_h = $h;
		$n_w = ceil(($h/$s_h) * $s_w); 
	}else{
		$n_h = ceil(($w/$s_w) * $s_h);
		$n_w = $w;
	}
    $img = imagecreatetruecolor($n_w, $n_h);
    //重采样拷贝部分图像并调整大小
	imagecopyresampled($img, $jpg, 0, 0, 0, 0, $n_w,$n_h, $s_w, $s_h);
	imagejpeg($img,$out_filename);
}
resize('pic/g.jpg','pic/av.jpg',500,500);
}}}*/

/************************************************************
 * {{{ 　102 色彩控制.处理函数1
 * 　Last Change: 2011-12-12 19:49 Monday
 *   Address : 史各庄 
 *   Maintainer: JiaMing Zhang
 * */
/*
$jpg = imagecreatefromjpeg("pic/g.jpg");
//是否为一个真彩色的图片
var_dump(imageistruecolor($jpg));
*/
/*
$jpg = imagecreatefromjpeg("pic/g.jpg");
if(imageistruecolor($jpg)){
//将真彩色图像转换为调色板图像    
	imagetruecolortopalette($jpg, true, 250);
}
imagecolorat($jpg, 10, 10);
header("content-type:image/gif");
imagegif($jpg);
 */
/*
$jpg = imagecreatefromjpeg("pic/g.jpg");
//获取颜色索引值
$rgb =  imagecolorat($jpg, 10, 10);
//取得索引颜色
$arr = imagecolorsforindex($jpg, $rgb);
$color = imagecolorallocate($jpg, $arr['red'], $arr['green'], $arr['blue']);
//画一矩形
imagefilledrectangle($jpg, 0, 300, 100, 200, $color);
header("content-type:image/jpeg");
imagejpeg($jpg);
 */
/*
$jpg = imagecreatefromjpeg('pic/g.jpg');
if(imageistruecolor($jpg)){
    //转换为调色板图像
	imagetruecolortopalette($jpg, true, 255);
}
$index = imagecolorat($jpg, 50, 310);
//给调色板索引设定颜色,($,$ind,红,绿,蓝)
imagecolorset($jpg, $index, 22, 121,32);
header("content-type:image/gif");
imagegif($jpg);
}}}*/

/************************************************************
 * {{{　103 色彩控制.处理函数2
 * 　Last Change: 2011-12-12 19:50 Monday
 *   Address : 史各庄 
 *   Maintainer: JiaMing Zhang
 * */
/*
$gif = imagecreatefromgif("pic/s.gif");
//设定透明色
$index =  imagecolortransparent($gif);
 */
/*
$jpg = imagecreatefromjpeg('pic/g.jpg');
$color = imagecolorat($jpg, 10, 10);
//echo $color;
var_dump(imagecolorsforindex($jpg, $color));
* */
/*
$info = getimagesize('pic/g.jpg');
$jpg = imagecreatefromjpeg("pic/g.jpg");
//转调色板
imagetruecolortopalette($jpg, true, 5);
//定义透明色
imagecolortransparent($jpg,1);

$img= imagecreatetruecolor($info[0]+20, $info[1]+20);
imagefill($img, 1, 2, imagecolorallocate($img,121,124,0));
imagecopy($img, $jpg, 0, 0, 0, 0, $info[0], $info[1]);
header("content-type:image/gif");
imagegif($img);
 */
/*
$gif = imagecreatefromgif("pic/a.gif");
//获得透明色的索引
$gif_index = imagecolortransparent($gif);
//获得透明色的RGB值
$gif_rgb = imagecolorsforindex($gif, $gif_index);
//建立画布
$img = imagecreatetruecolor(400,400);
//设定填充颜色
$bg_color = imagecolorallocate($img,$gif_rgb['red'],$gif_rgb['green'],$gif_rgb['blue']);
imagefill($img,0,0,$bg_color);
imagecopyresampled($img, $gif, 0, 0, 0, 0, 400,400,imagesx($gif),imagesy($gif));
//设定填充色为透明色
imagecolortransparent($img,$bg_color);
header("content-type:image/gif");
imagegif($img);
 */
/*
$gif = imagecreatefromgif("pic/a.gif");
$img = imagecreate(500, 500);
$bg_color = imagecolorallocate($img,255,0,0);
imagecopyresampled($img, $gif, 0, 0, 0, 0, 500, 500, imagesx($gif), imagesy($gif));
imagecolortransparent($img,$bg_color);
header("content-type:image/gif");
imagegif($img);
}}}*/

/************************************************************
 * {{{　105-108 水印处理1-2 缩略图1-2
 * 　Last Change: 2011-12-12 20:43 Monday
 *   Address : 史各庄 
 *   Maintainer: JiaMing Zhang
 *
 * */

class image
{   
    //水印部分
    public $watermark_on = 1;//是否开启水印
    public $water_img = "pic/logo1.jpg";//水印图片    
    public $pos = 1;//水印的位置    
    public $pct = 80;//水印透明度    
    public $quality = 80;//图像的压缩比    
    public $text = "jm088.com";//水印的文字内容
    public $text_size = 12;//字体大小
    public $color = "#000000"; //文字颜色
    public $font = "pic/msyh.ttf";//字体

    //缩略图部分
    private $thumb_on = 1;//是否开启缩略图功能
    public $thumb_type = 1;//生成缩略图的方式
    public $thumb_width = 200;//缩略图的宽度
    public $thumb_height = 200;//缩略图的高度
    public $thumb_fix = '_jm088_products';//缩略图后缀
    
    //(3)
    function __construct()
    {
        //class 1, class 2, class 3, class 4
        $config = require_once '105_pic_config.php';
        $this->watermark_on = $config['web']['watermark_on'];

        $this->thumb_on = $config['thumb']['thumb_on'];
		$this->thumb_fix = $config['thumb']['thumb_fix'];
        $this->thumb_type = $config['thumb']['thumb_type'];

		$this->conf ( $config ['watermark'] );

    }
    //(4)
    private function conf($config)
    {
		$this->water_img = $config['water_img'];
		$this->pos=$config['pos'];
		$this->pct = $config['pct'];
		$this->text = $config['text'];
    }
    //(2)环境验证
    private function check($img)
    {
        //echo $img."<br/>";
        
        $type = array('.jpg', '.jpeg', '.png', '.gif');
        $img_type = strtolower(strrchr($img, '.')); //转成小写
        return extension_loaded('gd') && file_exists($img) && in_array($img_type, $type);
    }

    //(6)图片尺寸,获取缩略图信息
    //@param $img_w     原图宽度
    //@param $img_h     原图高度
    //@param $t_w       缩略图的宽度
    //@param $t_h       缩略图的高度
    //@param $t_type    处理方式
    //return array      
    private function thumb_size($img_w, $img_h, $t_w, $t_h, $t_type)
    {
        //初始化缩略图
        $w = $t_w;
        $h = $t_h;
        //初始化原图尺寸
        $cut_w = $img_w;
        $cut_h = $img_h;
        //若缩略图小于原图
        if($img_w <= $t_w && $img_h <= $t_h )
        {
            $w = $img_w;
            $h = $img_h;
        }
        elseif(!empty($type) && $t_type > 0)
        {
            switch($t_type)
            {
            case 1: //固定宽度, 高度自增
                $h = $t_w / $img_w * $img_h;
                break;
            case 2: //固定高度 宽度自增
                $w = $t_h / $img_h * $img_w;
                break;
            case 3: //固定宽度 高度裁切
                $cut_h = $img_w / $t_w * $t_h;
                break;
            case 4: //固定高度 宽度裁切
                $cut_w = $img_h / $t_h * $t_w;
            case 5:
            default:    //等比缩放
                if(($img_w / $t_w) > ($img_h / $t_h))//宽
                {
                    $h = $t_w / $img_w * $img_h;
                }
                elseif(($img_w / $t_w) < ($img_h / $t_h))//长
                {
                    $w = $t_h / $img_h * $img_w;
                }
                else
                { $w = $t_w; $h = $t_h; }
            }
        }
		$arr [0] = $w;      //缩宽
		$arr [1] = $h;      //缩高
		$arr [2] = $cut_w;  //原图宽
		$arr [3] = $cut_h;  //原图高
		return $arr;
    }
    //(5)图片裁切处理部分
    //@param $img       操作的图片路径
    //@param $outfile   输出的文件路径
    //@param $t_type    裁切图片的方式   
    //@param $t_w       缩略图宽度
    //@param $t_h       缩略图高度
    //@param $string    
    public function thumb($img, $outfile='', $t_type='', $t_w='', $t_h='')
    {
        if(! $this->thumb_on || ! $this->check ( $img )) return false;
        //基础配置
        $t_type = $t_type ? $t_type : $this->thumb_type;
        $t_w = $t_w ? $t_w : $this->thumb_width;
        $t_h = $t_h ? $t_h : $this->thumb_height;
        
        //获得原图像的信息
        $img_info = getimagesize($img);
        $img_w = $img_info[0];
        $img_h = $img_info[1];
        $img_type = image_type_to_extension($img_info[2]);//获取图像后缀
        
        //获得相关尺寸
        $thumb_size = $this->thumb_size ($img_w, $img_h, $t_w, $t_h, $t_type);
        
        //原始图像资源
        $func = "imagecreatefrom".substr($img_type, 1);
        $res_img = $func($img);
        //eval("\$res_img = createfrom".substr($img_info, 1)."('$img');");

        //缩略图资源
        if($img_type =='.gif' || $img_type == ".png")
        {
            $res_thumb = imagecreate($thumb_size[0], $thumb_size[1]);   //缩宽高
            $color = imagecolorallocate($res_thumb, 255, 0, 0);         //分配颜色
        }
        else
        {   
            //imagecreate 容易出错, 创建真彩色
            $res_thumb = imagecreatetruecolor($thumb_size[0], $thumb_size[1]);
        }

        //制作缩略图
        if( !function_exists ('imagecopyresampled'))
        {
            //($缩图, $, $缩_x , $缩_y , $源_x ,$源_y , $缩_w , $缩_h , $源_w , $源_h )
             imagecopyresampled($res_thumb, $res_img, 0, 0, 0, 0, $thumb_size [0], $thumb_size [1], $thumb_size [2], $thumb_size [3] );
        }
        else
        {
            //(缩图 , $, $缩_x , $缩_y , $源_x ,$源_y , $缩_w , $缩_h , $源_w , $源_h )
            imagecopyresized($res_thumb, $res_img, 0, 0, 0, 0, $thumb_size [0], $thumb_size [1], $thumb_size [2], $thumb_size [3] );

        }
        //处理透明色
        if($img_type == '.gif' || $img_type == '.png')
        {   
            //($image , $color )            
            imagecolortransparent($res_thumb,$color);
        }
        //配置输出文件名
        $outfile = $outfile ? $outfile : substr($img, 0, strpos($img, '.')). $this->thumb_fix.$img_type;

        $func = 'image'.substr($img_type, 1);
        $func($res_thumb, $outfile);//生成新图片
        if(isset($res_thumb))imagedestroy($res_thumb);//清空资源
        if(isset($res_img))imagedestroy($res_img);
        return $outfile;
    }

    //(1)水印处理类
    // @param $img 			操作的图像
	// @param $out_img		另存的图像
	// @param $water_img 	水印图片
    // @param $text			文字水印内容
	// @param $pct			透明度
	// return boolean
    public function watermark($img, $out_img='', $water_img='', $pos='', $text='', $pct='')
    {
        //验证原图
        if(! $this->check($img) || !$this->watermark_on ) return false;
        //验证水印图像
        $water_img = $water_img ? $water_img : $this->water_img;
        //if($this->check($water_img)) $waterimg_on = 1;
        $waterimg_on = $this->check($water_img) ? 1 : 0;       
        //判断另存图像
        $out_img = $out_img ? $out_img : $img;
        //水印位置
        $pos = $pos ? $pos : $this->pos;
        //水印文字
        $text = $text ? $text : $this->text;
        //水印透明度
        $pct = $pct ? $pct : $this->pct;
        //获得原图
        $img_info = getimagesize($img);
        $img_w = $img_info[0];  //宽
        $img_h = $img_info[1];  //高
        //获得水印信息
        if($waterimg_on)
        {
            //水印图像
            $w_info = getimagesize($water_img);
            $w_w = $w_info[0];
            $w_h = $w_info[1];
            
            //判断水印类型
            switch ($w_info[2])
            {
            case 1:
                $w_img = imagecreatefromgif($water_img);
                break;
            case 2:
                $w_img = imagecreatefromjpeg($water_img);
                break;
            case 3:
                $w_img = imagecreatefrompng($water_img);
                break;
            }
        }
        else
        {
            //echo $text;
            if(empty($text) || strlen($this->color) !=7) return false;
            //获得文字宽高
            $text_info = imagettfbbox($this->text_size, 0, $this->font, $text);
            $w_w = $text_info[2] - $text_info[6];
            $w_h = $text_info[3] - $text_info[7];

        }
        //建立原图资源
        if( $img_h < $w_h || $img_w < $w_w ) return false;
        switch( $img_info[2]) 
        {
        case 1:
            $res_img = imagecreatefromgif($img);
            break;
        case 2:
            $res_img = imagecreatefromjpeg($img);
            break;
        case 3:
            $res_img = imagecreatefrompng($img);
            break;
        }

        //水印位置的处理方法
        switch($pos)
        {
        case 1:
            $x = $y = 25; //固定 左上
            break;
        case 2:
            $x = ($img_w-$w_w)/2; //源图宽度减掉水印宽度, 上中
            $y = 25;
            break;
        case 3:
            $x = $img_w-$w_w; // 右上
            $y = 25;
            break;
        case 4: 
            $x = 25; //中左
            $y = ($img_h - $w_h)/2;
            break;
        case 5:
            $x = ($img_w - $w_w)/2; //  中 中
            $y = ($img_h - $w_h)/2;
            break;
        case 6:
            $x = $img_w - $w_w; //中右
            $y = ($img_h - $w_h)/2;
            break;
        case 7:
            $x = 25; // 下左
            $y = $img_h - $w_h;
            break;
        case 8:
            $x = ($img_w - $w_w)/2; // 下中
            $y = $img_h - $w_h;
            break;
        case 9:
            $x = $img_w - $w_w; // 下右
            $y = $img_h - $w_h;
            break;
        default :
            $x = mt_rand(25, $img_w - $w_w); //随机
            $y = mt_rand(25, $img_h - $w_h);
        }
        //叠加水印或文字
        if($waterimg_on)
        {
            
            if($w_info[2]==3)
            {
                //去png水印白底
                imagecopy($res_img, $w_img, $x, $y, 0, 0, $w_w, $w_h);
            }
            else
            {
                imagecopymerge($res_img, $w_img, $x, $y, 0, 0, $w_w, $w_h, $pct);
            }    
        }
        else
        {
            $r = hexdec(substr($this->color, 1, 2));
            $g = hexdec(substr($this->color, 3, 3));
            $b = hexdec(substr($this->color, 5, 2));
            //$color = imagecolorallocate($res_img, $this->text_size, 0, $x, $y, $color, $this->font, iconv('utf-8', 'gbk', $text));
            $color = imagecolorallocate($res_img, $r, $g, $b);
            imagettftext($res_img, $this->text_size, 0, $x, $y, $color, $this->font, $text);
        }
        //生成
        switch($img_info[2])
        {
        case 1:
            imagegif($res_img, $out_img);
            break;
        case 2;
            imagejpeg($res_img, $out_img, $this->quality); //压缩比
            break;
        case 3:
            imagepng($res_img, $out_img);
            break;

        }
        //清空资源
        if(isset($res_img)) imagedestroy($res_img);
        if(isset($w_img)) imagedestroy($w_img);
        return true;

    }

}
/*
//$info = getimagesize('pic/a.jpg');
$type = image_type_to_extension($info['2']);
//echo $type;
$func = "createfrom".substr($type, 1);
echo $func;
exit();
print_r($info);
}}} */


?>
