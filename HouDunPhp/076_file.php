
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
<?php

/************************************************************
 * 　76 文件处理
 * 　2011-11-27 20:41
 *
 *  相关函数：
 *  
 * */

/*  php.ini 文件中 include_path = "c:\php\includes" 
 *  配置当文件找不到的时候在这里找
 *  file("aa.txt",1) 加１就在"c:\php\includes" 找.很少用
 */
/*
$array = file("aa.txt"); //获取文件内容, 以行返回数组
//print_r($array);
foreach ($array as $k=>$v)
{
    if($k%2==0 )
    {
        echo "<span style = \"color:#666\"> {$v}</span><br/>";
    }
    else
    {
        echo "<span style = \"color:#f00\"> {$v}</span><br/>";
    }
}
*/

/* 文件复制
if ( ! file_exists ( "hd/aa.txt" )) {
	if (copy ( 'aa.txt', 'hd/aa.txt' ))
		echo "复制成功!";

} else {
	echo "文件存在，复制停止！";
	exit ();
}
*/

/*文件改名*/
/*
if(rename("aa.txt", "aa.php"))
    echo "<script>alert('改名成功！')</script>";*/
//rename("hd", "hdw");
//rename("aa.php","a/hd.php");


/************************************************************
 * 　77 时间处理
 * 　2011-11-27 20:41
 *
 *  相关函数：
 *  filemtime 文件内容的修改时间 
 *  filectime 文件的客观属性修改时间,创建时间
 *  fileatime 文件的访问时间
 *  date_default_timezone_set  //设置时区,中国时区
 *  touch   强制修改文件时间: 内容修改时间,访问时间。使用不多
 * */

//设置时区,中国时区
//date_default_timezone_set("PRC"); //PRC Asia/Chongqing Asia/Shanghai

//touch('a.txt');   //强制修改文件时间: 内容修改时间,访问时间。使用不多
//mktime: 8点55分33秒 5月22日2033年 
//touch('a.txt',mktime(8,55,33,5,22,2033));   

//文件的客观属性修改时间,创建时间
//echo "文件的修改时间:".date("Y-m-d h:i:s",filectime('a.txt'))."<br/>";

//文件内容的修改时间
//file_put_contents("a.txt", "www.jm088.com");
////fsutil behavior query disablelastaccess 查看
//fsutil behavior set disablelastaccess 0  ，0:开启，1关闭
//echo "文件内容修改时间:".date("Y-m-d h:i:s", filemtime('a.txt'))."<br/>";

//file("a.txt"); //没有用
//echo "文件的访问时间：".date("Y-m-d h:i:s",fileatime("a.txt"));

/*
echo date("Y-m-d h:i:s",filemtime('m.txt'));
//$a = fopen('a.txt', 'w+');
file_put_contents('m.txt', "www.jm088.com");
clearstatcache();   //清除文件缓存
sleep(2);
echo "<br/>";
//有缓存，时间不变
echo date("Y-m-d h:i:s",filemtime('m.txt'));
 */

/************************************************************
 * 　78 文件指针控制
 * 　2011-11-28 星期一 晚 19:41 赵庄
 *
 *  相关函数：
 *  fseek($file,500,SEEK_CUR)   移动指针的位置,SEEK_CUR累加计算，
 *  rewind  指针移动到开始部位
 *  ftell   得到当前指针位置
 *  feof    判断文件指针是否到达末尾
 *  fpassthru   当前后边内容输出
 * */

//$file = fopen('a.txt','r');
//fread($file, filesize('a.txt')+1);
/*
$array = array();
while(!feof($file))
{
    $array[] = fgets($file);
}
echo "<pre>";
print_r($array);
//echo intval(feof($file));
 */
/*
echo filesize('a.txt')."<br/>";
//移动指针的位置,
fseek($file, 20);
//读取一行
//fgets($file);
//SEEK_CUR累加计算，
fseek($file,20,,SEEK_CUR);
//ftell 得到当前指针位置
echo ftell($file);
 */

/*
$file = fopen('a.txt','w+');
fwrite($file, "http://www.jm088.com");
//指针移动到开始部位
rewind($file);
echo fread($file, 1024)
*/

//fseek($file,20);
//fpassthru($file);

/************************************************************
 * 　79  文件处理flock文件锁定
 * 　2011-11-28 星期一 晚 20:16 赵庄
 *  
 *  相关函数：
 * pathinfo.    返回有关文件，文件名的所有信息
 * realpath(). 获得文件信息
 * tmpfile().   随机建立一个临时文件,返回连接句丙
 * tempnam()  随机建立一个临时文件，保证不重名
 *
 * */
/*
$array = pathinfo('a.txt');
echo "<pre>";
print_r($array);

//echo realpath('.');
$arr =  pathinfo('a.txt');
echo realpath($arr['dirname']);
*/

/* 同样获取文件路径
echo dirname(__FILE__);
echo realpath('.');
*/

/* iconv('gbk','utf-8',$content) 编码转换函数 
$content = 'http://blog.softrpm.com';
$content = iconv('','utf-8',$content);
file_put_contents('aa.txt',$content);
*/

/* 文件锁 
 * flock($file,LOCK_SH)
 * LOCK_SH:文件上锁,其它程序可以读取，
 * LOCK_EX:文件上锁,其它程序不可以读写，
 
$str = "PHP测试1！\n  ";
$str = iconv('utf-8','gbk',$str);
$file = fopen('a.txt', 'r+');
fread($file,filesize('a.txt'));
flock($file, LOCK_EX); //设置只读，别的程序不充许写入
fwrite($file, $str);
flock($file, LOCK_UN); //解锁
fclose($file);
 */

/* 写锁例子
$file = fopen('a.txt', 'r+');
if(flock($file, LOCK_EX)) // LOCK_EX+LOCK_NB:防止文件锁堵塞
{
    fwrite($file, "PHP测试写入");
}
else
{
    echo "文件锁定，不可以写入内容";
}
*/
/*
//$file = tempnam(".",'ho_');
$file = tmpfile();
fwrite($file, '后盾网视频教程');
rewind($file);
fpassthru($file);   //输出到缓冲区
fclose($file); //文件删除
*/

/************************************************************
 * 　80  文件上传
 * 　2011-12-02 星期五 晚 22:35 北京 海淀 史各庄
 *  
 *  相关函数：
 * 1.打开上传功能，2.上传位置，3.文件上传大小 4.脚本运行最大时间 5.内存大小
 * */

/*  mutipart/form-data 大量的文件
 *  application/x-www-form-urlencoded 少量的文件
 *  text/pain   大量的文本文件,例如邮件
 *

    echo "<pre>";
    print_r($_POST);
    print_r($_FILES);

echo "
<html>
    <head>
    <title>
        文件上传    
    </title>
    </head>
    <body>
    <form action='' method=\"post\" enctype=\"multipart/form-data\" >
    
    <input type='file' name='file1'><br/>
    <input type = 'submit'  value='上传文件'> 
    </form>
    </body>
</html>
";
 */

/************************************************************
 * 　81  文件上传
 * 　2011-12-02 星期五 晚 23:14 北京 海淀 史各庄
 *  
 *  相关函数：
 *  is_uploaded_file.
 *  move_uploaded_file
 * */

/************************************************************
 * 　82  多个文件上传处理
 * 　2011-12-03 星期六 晚 11:34 北京 海淀 史各庄
 *  
 *  相关函数：
 * */

/*
echo "<pre>";
//print_r($_FILES);

function delEmpty($v)
{
    return $v!= '';
}

$upFileName = array_filter($_FILES['file']['name'],delEmpty);
//print_r($upFileName);

// 配置上传目录 
$dirName = 'upload/'.date('ymd');

if(!is_dir($dirName))
{
    mkdir($dirName);
}

$htmlStr = "
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> 
    <table border=1><tr><td>文件名</td><td>文件大小</td><td>时间</td><td>查看</td></tr>";
//多文件上传处理
foreach($upFileName as $k => $v)
{
    $newFilePath = $dirName.'/'.$v;
    //echo $newFilePath."<br/>";
    if(is_uploaded_file($_FILES['file']['tmp_name'][$k]))
    {   
        if(!move_uploaded_file($_FILES['file']['tmp_name'][$k], $newFilePath))
        {
            echo "<script>alert('上传文件失败！');</script>";
            exit();
        }
        $htmlStr .= "<tr><td>{$v}</td><td>{$_FILES['file']['size'][$k]}</td><td>".date("Y年m月d日",filectime($newFilePath))."</td><td><a href='{$newFilePath}'>点击查看</a></td></tr>";
    }
    else
    {
		echo "<script>alert('非法文件')</script>";
	}
}

$htmlStr .= "</table>";
file_put_contents('upfile.html', $htmlStr);
echo "<div style='border:solid 9px #dcdcdc;width:500px; height:100px;position:absolute;left:200px;top:80px;font-size:13px;'>
	文件上传成功！ <a href='upfile.html'>点击查看详细</a>
    </div>";


echo "
<html>
    <head>
    <title>
        文件上传    
    </title>
    </head>
    <body>
    <form action='' method=\"post\" enctype=\"multipart/form-data\" >    
	文件1：	<input type=\"file\" name = \"file[]\"/><br/>
	文件2：	<input type=\"file\" name=\"file[]\"><br/>
	文件3：	<input type=\"file\" name=\"file[]\"><br/>
	文件4：	<input type=\"file\" name =\"file[]\"><br/>
    <input type = 'submit'  value='上传文件'> 
    </form>
    </body>
</html>
";

 */

/************************************************************
 * 　83  通过超链接实现文件下载
 * 　2011-12-03 星期六 下午 14:24 北京 海淀 史各庄
 *  
 *  相关函数：
 *
 * */




?>
