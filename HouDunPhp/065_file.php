
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
<?php

/************************************************************
 * 　65 文件处理
 * 　2011-10-27 21:29
 *
 *  相关函数：
 *  disk_total_space('.') 整个磁盘空间
 *  disk_free_space('/') 剩余空间
 *  round(*,4) 四舍五入，保留4位小数
 *  pow(2,4)  
 *
 *	strrchr(,); 从后边截取
 *	目录常量 DIRECTORY_SEPARATOR， 相当于 /
 *	basename(__FILE__) 返回路径中的文件名部分
 *	dirname()  上一级目录,可嵌入
 *	strrchr()
 *	trim()
 *	strpos	张第个
 *	file_exists 判断 文件是否存在
 *	filetype 检测文件类型
 *
 *  
 * */

/* 36701163520 以字节形式显示*/
//echo disk_total_space('.'); 

/* 第一次除1024是k,第二次是MB,第三次是G */
//echo disk_total_space('.')/1024/1024/1024 ;

/*输出2的4次方*/
//echo pow(2,4);  
//echo round(disk_total_space('.')/1024/1024/1024,1).'G';

//$totalSpace = round(disk_total_space('.') /pow(1024,3), 1) . 'G';   //总空间
//$freeSpace = round(disk_free_space('.') /pow(1024,3), 1) . 'G';     //剩余空间

//echo "已用空间：".($totalSpace - $freeSpace).'G';

//echo __FILE__;
//DIRECTORY_SEPARATOR



//strrchr 从后边截取, /以后的内容
//trim 删掉 / 符号
//DIRECTORY_SEPARATOR 代替 \ 的，在linux中不会产生错误
//
//echo  trim(strrchr(__FILE__, DIRECTORY_SEPARATOR), DIRECTORY_SEPARATOR );


//basename: 获取文件文并去掉.php
//echo basename(__FILE__,'.php');

//获取路径 麻烦
// -1: 是去掉未尾的 /,
// 0 到 str... 截取这部份
//
//echo  substr(__FILE__, 0, strpos(__FILE__, basename(__FILE__)) -1);

//echo strpos(__FILE__,  basename(__FILE__));

//获取路径 简单的
//echo dirname(__FILE__);
//echo dirname(dirname(__FILE__));	//支持嵌入输出
//
//获取网站根目录
//define('WAMP', dirname(dirname(__FILE__)));
//
//echo WAMP;


/*
if(!file_exists('config.php'))
{
    die("配置文件config不存在程序无法运行，请到官方得到支持");
}
 */

//filetype 文件类型 file:文件，dir:目录
//
//

//echo filetype("065_file.php");
//echo filetype("hd");



/* *****************************************************************
 * 66，2011-11-15 22:17
 *
 * 相关函数：
 * is_dir() 判断目录,不能判断文件
 * mkdir
 * getcwd() 获得当前操作目录
 * chdir()  更改当前操作目录
 * sleep(10) 延缓十秒在执行后边的内容
 * rmdir
 *
 *
 * */

//var_dump(is_dir('065_file.php'));



// mkdir 创建目录，true 是以递归的方式创建,
//
//mkdir('61',0777,true); // 777：最高权限
//mkdir('template/default/image/',0777,true); //最高权限
//
//批量创建
//$dir = array("image", "html", "cache", "js");
//array_map(mkdir, $dir);

/*
if(!file_exists)
{
    mkdir("uploads/". date('ymd', time()),0777,true);
}
 */


//
//echo getcwd();
//chdir: 更改当前目录
//chdir('hd');    
//$webArr = include 'aa.php';
//
//print_r($webArr);
//mkdir('aaaaa');
//sleep(10);
//mkdir('bbb');

/*
if(file_exists('uploads'))
{
    rmdir( 'uploads' );
    echo '删除成功';
}
 */




/* *****************************************************************
 * 67，2011-11-18 10:16 家里，
 *  
 *  
 * 相关函数：
 * rename()目录改名
 * scandir() 显示文件夹所有内容
 * strstr() 从左尾截取
 * strrchr() 从右截取
 * 
 * */


/*
if(!file_exists('60'))
{
    mkdir('60',0777,true );
    echo '创建成功';
}
*/

//rename( '60' , '11111' );
//var_dump(rename('a.php', 'aaaaa.php'));

//$dirArr = scandir('.');//当前目录所有文件
//echo "<pre>";
//print_r( $dirArr );

/*
$basename = 'sdfsd.fds.php';
echo strstr($basename, '.');
echo strrchr($basename, '.');
 */
/*
foreach($dirArr as $v)
{
    $base = strrchr($v, '.');

    if($v !== '.')
    {
        //$v = '当前目录';

        if($v == '..')
        {
            $v = '上级目录';
        }

        if(is_dir($v))
        {
            $type = "dir";
        }
        elseif($base == '.jpg' || $base == '.gif' || $base == '.png')
        {
            $type ='jpg'; 
        }
        elseif($base == '.rar' || $base =='.zip' || $base == '.7z')
        {
            $type = 'rar';
        }
        elseif($base == '.swf' || $base == '.avi' || $base == '.flv')
        {
            $type = 'swf';
        }else{
            $type = 'text';
        }
        //echo "<img src=\"./ico/{$type}.jpg \" width=20/> &nbap; {$v} <br/>";
        echo "{$type} &nbsp; {$v} <br/>";
    }    
}
*/


//遍历目录下的所有文件夹
//扩展网站删除系统

/*
 
function scand($dir)
{
    static $i = 0;
    static $d = 0; //文件夹
    $count = '';

    $dirInfo = scandir( $dir );
    foreach ( $dirInfo as $v )
    {
        if( $v != '.' && $v != '..')
        {
            $dirname = $dir . '\\' .$v;
            echo $dirname .'<br/>';
            if(is_dir( $dirname))
            {
                $count['dir'] = ++$d;
                scand( $dirname );               
            }else{       
                $count['file'] = ++$i;
            }
        }
    }
    return $count;
}

$count = scand('.');

echo "文件 {$count['file']} 个,文件夹{$count['dir']}个";

*/


/* *****************************************************************
	2011-11-20 下午 13:15 星期日 北师大，
	68 : 文件处理
	
	相关函数：
	glob 以数组形式返回，参数1这个目录的所有内容，可以指定返回的具体类型
	rewinddir 返回目录指针到开头
	opendir 打开一个目录，返回链接句柄
    readdir 读取当前指值所指内容，同时指针下移，如果到结果，返回FALSE
*/

//$dirArr = glob('./*.wmv');
//$dirArr = glob('./*.php');
//$dirArr = glob('./*');
//echo "<pre>";
//print_r($dirArr);

/*function globDir($dirname, $type = '')
{
	if($type == '')
	{
		$dirInfo = glob($dirname.'/*');
	}
	else
	{
		$dirInfo = glob($dirname.'/*.'.$type);
	}
	
	foreach ($dirInfo as $v)
	{
		echo $v."<br/>";
		if(is_dir($v))
		{
			globDir($v);
		}
	}
	return $dirInfo;
}*/

//$info = globDir('./');
//$info = globDir('.','php');
//$info = globDir('../');
/* 读取所有文件 */
//$info = globDir($_SERVER['DOCUMENT_ROOT']);
//print_r($info);

//$dir = @opendir('test1');
//var_dump($dir);
//echo readdir($dir); echo readdir($dir);echo readdir($dir); 

/* 读取所有文件
//$dir = @opendir('../');
$dir = @opendir('a');
while ($file = readdir($dir))
{
	echo $file."<br/>";
}
//echo readdir($dir);
//rmdir('a');	//1 必须为空，2不在被使用
closedir($dir);	//关闭
//echo readdir($dir);
*/

/*$dir = opendir('a');
while(($file = readdir($dir)) != FALSE)
{
	echo $file."<br/>";
}

echo "<br/>====================<br/>";

rewinddir($dir); ///返回目录指针到开头

while(($file = readdir($dir)) ){
	echo $file."<br/>";
}*/




/* *****************************************************************
 *
 *  2011-11-20 下午 13:15 星期日 北师大，
	69 : 文件处理 目录操作 统计大小 
	
	相关函数：
	filesize: 文件大小，以字节形式返回
	unlink:删除文件

 */

/*echo "<pre>";
print_r(get_declared_classes());
*/

/*$dir = dir('.');
//var_dump($dir);
while(($file = $dir->read()) != FALSE )
{
	echo $file."<br/>";
}
//$dir->close();
$dir->rewind();
echo "<br/>====================<br/>";
while(($file = $dir->read()) != FALSE )
{
	echo $file."<br/>";
}*/

//echo (filesize('a/a.txt')/1024)."K"; 

//sleep(6);
//unlink('60/1.php'); //删除单个文件

/*sleep(5);
//array_map(unlink, glob('a\*.doc'));//数组地图 , 删除所有.doc 的内容
array_map(unlink, glob('a\*.*')); //删除所有文件
*/


//获取整个目录大小，
/*function dirSize($dirname)
{
	$dir = opendir($dirname);
	while(($file = readdir($dir)) !== FALSE )
	{	
		$filename = $dirname.'\\'.$file;
		if($file != '.' && $file !='..')
		{
			if(is_dir($file))
			{
				$count += dirSize ( $file );
			}
			else
			{
				$count += filesize($filename);
			}
		}
	}
	return $count;
}
echo (dirSize('.')/pow(1024,2))." mB";
*/

//第二种方法，通过glob
/*function dirSize_glob($dirname)
{
	
	$dirname .= "/*";
	$dirInfo = glob($dirname);
	//print_r( $dirInfo );
	foreach($dirInfo as $v)
	{
		if(is_dir($v))
		{
			$count += dirSize_glob($v);
		}
		else
		{
			$count += filesize($v);
		}
	}
	return $count;
	
}

echo dirSize_glob('.')/ pow(1024,2) . "mb";
//$dirArr = glob('./*');
*/

//第三种方法，通过scandir 扫描方法
/*function dirSize_scandir($dirname){
	$dirArr = scandir($dirname);
	foreach ($dirArr as $v){
		$fileName = $dirname.'\\'.$v;
		if($v!='.' && $v!='..'){
			if(is_dir($fileName)){
				$count +=dirSize_scandir($fileName);
			}else{
				$count+=filesize($fileName);
			}
		}
	}
	return $count;
}
echo dirSize_scandir('.')/pow(1024,2)."mb";
*/



/* *****************************************************************
 *
	2011-11-20 下午 16:15 星期日 北师大后主楼916
    70 : 目录操作 删除目录 删除指定类型文件
	相关函数：

*/

/*$dir = opendir('c');

while ($file = readdir($dir))
{	
	if($file !='.' && $file!= '..')
	{
		unlink( 'c\\'.$file );
	}
}

closedir($dir);
rmdir ('c');
*/

//删除目录下的所有文件1
/*$dirArr = glob('b\*');
foreach ($dirArr as $v)
{	
	unlink($v);
}
rmdir('b');
*/

//删除目录下的所有文件2
/*$dirArr = glob('b\*');
array_map(unlink, $dirArr);
rmdir('b');
*/

//删除目录下的所有文件,目录1 opendir()
//推荐用这个，比较稳
/*function delDir($dirname)
{
	$dir = opendir($dirname);
	while ($file = readdir($dir))
	{
		$filename = $dirname.'\\'.$file;
		if($file != '.' && $file != '..' )
		{
			if(is_dir($filename))
			{
				delDir($filename);
			}
			elseif(is_file($filename))
			{
				unlink($filename);
			}
		}
	}
	closedir($dir);
	rmdir($dirname);
}
delDir('a');*/

//删除目录下的所有文件,目录1 glob()
//容易出现问题
/*function delDirGlob($dirname)
{
	$dirArr = glob($dirname.'.\*');	
	//print_r($dirArr);
	foreach($dirArr as $v)
	{
		if(is_dir($v))
		{
			delDirGlob($v);
		}
		elseif(is_file($v))
		{
			unlink($v);
		}
	}
	rmdir($dirname);
}
delDirGlob('ggg');
*/


/*
	删除指定, 多种 类型文件
*/
function delFile($dirname, $fileType)
{
	$dir = opendir($dirname);
	while(($file = readdir($dir)) != FALSE )
	{
		$filename = $dirname.'\\'.$file;
		if($file !='..' && $file != '.')
		{
			if(is_dir($filename))
			{
				delFile($filename, $fileType);
			}
			if(!is_array($fileType)) 
			{
				$Type[] = $fileType;
			}
			else
			{
				$Type = $fileType;
			}
			if(is_file($filename) && in_array(strrchr($file, '.'), $Type))
			{
				unlink($filename);
			}		
		}		
	}
}
//可操作多个，也可以操作，单个
//delFile('a', array('.rar', '.php'));
//delFile('a', '.php' );





/* *****************************************************************
 *
 *	2011-11-22 星期二　晚 17:30  赵庄,家里
 *  71 : 判断文件与操作文件
 *
 *	相关函数：
 *  fopen. 打开
 *  fread.　读文件 r:读　r+:读写从开头写
 *  fclose.
 *  is_executable 判断一个文件是否为 .exe，返回bool 类型
 *  is_readable. 判断一个文件是否可读
 *  is_writeable 文件是否可写，is_writable()
 *
*/
//$cf=fopen("a/test1.exe","w");		
//fclose($cf);
/*
for($i=1; $i<5;  $i++){
$cf=fopen("a/test{$i}.rar","w");		
fclose($cf);			
}
mkdir('a/aa/aaa/',0777,true); 
 */

//如果**.exe大小为0的话,将不识别
/*
if(is_executable('bb.exe') != FALSE)
{
    echo "这是一个可执行文件：他的大小是：".round(filesize('bb.exe')/pow(1024,2),3)."MB";
}*/

//is_numeric, is_array is_bool is_string
/*
if( is_file(__FILE__) )
{
    echo __FILE__."是一个文件";
}
else
{
    echo "不是一个文件";
}
if ( is_file(dirname(__FILE__)) )
{
    echo "文件";
}else
{
    echo "不是一个文件";
}
 */

//if(file_exists('60'))echo "文件存在";
/*
if(is_readable('a.php'))
{
    echo "文件可读！";
}
else
{
    echo "文件不可读！";
}
 */

//is_writeable 文件是否可写
/*
if(is_writable('a.php'))
{
    echo "文件可写！";
}
else
{
    echo "文件不可写！";
}
 */


/*
$a = fopen('aa.txt', 'r'); //r 读模式
$b = fopen('b.txt', 'r');

//echo fread($file, filesize('aa.txt'));
//echo fread($file, 10); //读取10个字节

echo fread($b, 10);
echo "<br/>";
echo fread($b, 10);
fclose($b);
 */

/*
$a = fopen('a.txt', 'r+'); //r+ 读写模式
fwrite($a, '12345678');
fclose($a);
//$a = fopen('a.txt', 'w');
//fclose($a);
 */

/* *****************************************************************
 *
 *	2011-11-23 星期三　下午 14:35  赵庄,家里
 *  72 : 文件操作模式指针归位
 *
 *	相关函数：
 *  rwax 
 *  rewind : 把文件指针移到开头
 *
 */

//fopen : r , w 模式是用的最多，x　模式用的不多
/*
$a = fopen('a.txt', 'r+'); //r+ 读写模式
echo fread($a, filesize('a.txt')); //把指针读到最后
fwrite($a, '111');  //在最后追加
fclose($a); 
 */

//w模式:如果文件存在清空内容
/*
$a = fopen('a.txt', 'w+'); //w 文件不存在可以创建 只写; w+ :写和读
fwrite($a, 'PHP写入内容');
rewind($a);
echo fread($a, filesize('a.txt'));
fclose($a);
 */

// a 模式和 w　模式都创建文件，
// 与w模式不同如果文件存在,把文件光标移在内容末尾
/*
$c = fopen('c.txt', 'a+');   //a+: 可以读
fwrite($c,'--this is my write three! '); 
rewind($c);
echo fread($c,filesize('c.txt'));
 */

// x 模式: 如果文件存在就不动,如不存在则创建
// x+ 读写模式
/*
$c = @fopen('d.txt', 'x+') or die('文件存在');   //a+: 可以读
fwrite($c,'--this is my write four! '); 
rewind($c);
echo fread($c, 100);
 */

//读取远端的内容
/*
$baidu = fopen("http://www.baidu.com", 'r');
//需开启 php.ini文件中的allow_url_fopen = On
while ($row = fgets($baidu))
{
    echo $row;
}
 */

/*
$logo = fopen("logo.png", 'rb');//最好加上b,
header("Content-type:image/png");
echo fread($logo, filesize('logo.png'));
 */


/* *****************************************************************
 *
 *	2011-11-23 星期三　下午 14:35  赵庄,家里
 *  73 : 文件
 *
 *	相关函数：
 * file_get_contents 一次性读取文件内容
 * file_put_contents 一次性写放文件内容
 * fgetc    获得一个字节内容
 * fgets    获得一行内容
 * fgetss   每次读取一行，过滤到HTML,和PHP标签. 第３个指定保留的标签
 *
 */

$file = fopen('phptest.txt','r');

/*
while(!feof($file))
{
echo fgets($file, 500)."<br/>";    //默认1024,很少用到这个参数
}
 */
fclose($file);

$file_html = fopen("phptest.php", 'r');
//$contents = fread($file_html, filesize('phptest.html'));
//echo $contents;

/*
while(!feof($file_html))
{
    echo fgetss($file_html,"<div><style>");
}*/

//fopen fread fclose 集合体，更快，更好
/* 
$content = file_get_contents('phptest.php');
echo $content;
 */

//写入内容到文件，不存在则创建
////fopen fwrite fclose 集合体
//$file = file_get_contents('http://www.baidu.com')
//file_put_contents('ttt.htm',$file);

/* *****************************************************************
 *
 *	2011-11-26 星期六　晚 20:50  海淀赵庄
 *  74 : 字符串无乱码截取
 *
 *	相关函数：
 * ord
 *
 */

$str = "山货网http://www.jm088.com/ or http://www.meisi.org/";
/*
echo substr($str, 0, 7);
echo "<br/>";
echo substr($str, 0, 4);
echo "<br/>";
echo substr($str, 4, 3);
echo "<br/>";
 */

//ord(substr($str, 0, 1)) > 0xa0;
//修必成3位截取,两位不好用
function sub($str, $len)
{
    $string = '';
    for($i = 0; $i<$len; $i++)
    {
        if(ord(substr($str, $i, 1)) > 0xa0)
        {
            //<F5>echo "是中文";
            $string .= substr($str, $i, 3);
            $i++;$i++;
            //echo $string."<br/>";
        }
        else
        {
            $string .= substr($str, $i, 1);
        }
    }
    return $string;
}

//echo sub($str, 27);
//echo "<br/>";
//echo substr($str, 0, 3);

/*
echo "<br/>";
echo "第一页内容：".sub($str,6);
echo "<br/>";
$page1 = strlen(sub($str, 6));
$page2 = strlen(sub($str,12))-strlen(sub($str,6));
echo "第二页内容：".substr($str,$page1 ,$page2);
 */


/* *****************************************************************
 *
 *	2011-11-26 星期六　晚 20:50  海淀赵庄
 *  75 : 文件内容分页操作类
 *
 *	相关函数：
 * 
 */

class StrPage{
	private $file;//文件内容 
	private $current;//当前页
	private $totalPage;//总的页数
	private $url;//url地址
	private $pageLen;//每页显示的内容长度
	function __construct($file,$len=500){
		$this->file = file_get_contents($file);//获取内容
		$this->current=isset($_GET['page'])?$_GET['page']:1;
		$this->pageLen = $len;
		$this->totalPage = $this->getTotalPage();		
		$this->url= $this->getUrl();
	}
	private function getTotalPage(){
		return ceil(strlen($this->file)/$this->pageLen);
	}
	private function getUrl(){
		$url =parse_url($_SERVER['REQUEST_URI']);
		parse_str($url['query'],$queryArr);
		unset($queryArr['page']);
		$queryStr = http_build_query($queryArr);
		return  $url['path'].'?'.$queryStr.'&page=';		
	}
	private function first(){
		if($this->current>1)return "<a href='".$this->url."1'>首页</a>";
	}
	private function pre(){	
		if($this->current>1)return "<a href='".$this->url.($this->current-1)."'>上一页</a>";
	}
	private function next(){
		if($this->current<$this->totalPage)return "<a href='".$this->url.($this->current+1)."'>下一页</a>";
	}
	private function end(){
		if($this->current<$this->totalPage) return "<a href='".$this->url.$this->totalPage."'>末页</a>";
	}
	private function pageList(){
		for ($i=1;$i<=$this->totalPage;$i++){
			if($i==$this->current){
				$pageListStr.="<span style='font-size:20px;color:#f00'>".$i."</span>&nbsp;";
			}else{
			$pageListStr.="<a href='".$this->url.$i."'>".$i."&nbsp;</a>";
			}
		}
		return $pageListStr;
	}
	public function pageStyle($style=1){
		switch ($style){
			case 1:
				return "共有".$this->totalPage."页".$this->first().$this->pre().$this->pageList().$this->next().$this->end();
				break;
			case 2;
				return $this->pageList();
				break;
		}
	}
	public function getContents(){
		$prePageLen = strlen($this->subStrs($this->current-1));
		$currentPageLen = strlen($this->subStrs($this->current));
		return substr($this->file, $prePageLen,$currentPageLen-$prePageLen);
	}
	private function subStrs($page){
		$len= $page*$this->pageLen;
		for ($i = 0; $i < $len; $i++) {
			if(ord(substr($this->file,$i,1))>0xa0){
					$string.=substr($this->file,$i,3);//源是2, 改成为3
					$i++;	$i++;
			}else{
				$string.=substr($this->file,$i,1);
			}
		}
		return $string;
	}
}
/*
$php = new StrPage('75.txt',3000);
echo "<div style='font-size:14px;line-height:1.8em;color:#666;padding:6px;width:960px;height:450px;'>".$php->getContents()."</div>";
echo "<div style='border:solid 1px #ccc;font-size:14px;color:#333'>";
echo $php->pageStyle();
echo "</div>";
*/










?>



