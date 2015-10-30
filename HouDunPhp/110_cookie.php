<?php
// vim: set et sw=4 ts=4 sts=4 fdm=marker ff=unix fenc=utf8 nobomb:
/**
 * 后盾网cookie session学习
 *2011-12-31
 * @author 
 * @date
 * @link 
 */

/*{{{    php.ini SESSION 配置: 
session.name=PHPSESSID  修改session ID
session.auto_start = 1 是否自动开启　0关闭
session.save_handler = files 以文件的形式保存session
session.save_paht = "d:/* /"; session　存诸的路径
session.cookie_path = /   session作用路径 /根目录
session.cookie_domain =   cookie 做用域
session.use_only_cookies = 1 是否只接受cookie传来的值

session.gc_maxlifetime = 3 是否开启垃圾,几秒后删除　24分
//删除概率 1/100 会处理
session.gc_probability = 1  
session.gc_divisor = 100  

}}} */

/*{{{*/ //110: cookie
//把输出内容区先放到缓冲区
//ob_start();
//echo "aaaaaaaaaaa";

//setcookie("web", "www.jm088.com", 0);
//1小时后过期
//setcookie("web", "www.jm088.com", time()+3600);
//1天过期
//setcookie("web", "www.jm088.com", time()+60*60*24);
//保存在整个网站内
//setcookie("web", "www.jm088.com", 0, '/');

//配置文件修改Cookie可以加入到内容区, 
//output_buffering=On     ,Off 关闭缓冲区

//最后一项作用域 . : www.baidu.com  tieba.baidu.com
//setcookie("web", "www.jm088.com", 0, '/', '.');
//清除cookie 
//setcookie("web", "www.jm088.com", time()-1, '/', '.');

/*
 setcookie('myname', 'etcphp');
echo $_COOKIE['myname'];

 */
/*}}}*/

/*{{{*//** 111: cookie
 *2011-12-31

 * */
// (1)
//setcookie('web', 'www.jm088.com', time()+3600);

//(名，值，时间，路径，做用域，https,5.2:XSS攻击,js)
//setcookie('web', 'www.jm088.com', time()+3600, '/', false, 1, true);
//echa $_COOKIE['web'];

//$jm088 = array('bbs.jm088.com', 'www.jm088.com');
//setcookie("$jm088[0]", $jm088[0]);
//setcookie("$jm088[1]", $jm088[1]);
//var_dump($_COOKIE);
//数组序列化
//setcookie("jm088", serialize($jm088));
//反序列化输出
//var_dump(unserialize($_COOKIE['jm088']));

/* (2)
$hdw = array('www.houdunwang.com','bbs.houdunwang.com');
$str = serialize($hdw);
setcookie('hdw', serialize($hdw));
print_r ( unserialize(stripslashes($_COOKIE['hdw']))) ;

//用我这个就OK了,你的原因是: 默认情况下，PHP 指令 magic_quotes_gpc 为 on，它主要是对所有的 GET、POST 和 COOKIE 数据自动运行,这个序列化保存到COOKIE中的格式就不是标准的格式了,所以会报错,或是不显示出来.
*/

/* (3)
class jm088
{
    public $name = "山货网";
    public function say()
    {
        echo "欢迎来到０８８山货网购物，祝您购物愉快";
    }
}

$obj = new jm088();
setcookie("obj", serialize($obj));

//$aa = unserialize($_COOKIE['obj']);
$aa = unserialize(stripslashes($_COOKIE['obj']));
$aa->sty();
//var_dump($aa);
 */

/* 验证用户是否开启cookies  (4) 
if(!isset($_GET['ckcookie']))
{
setcookie("cookieon","1");
$url = "http://localhost/edu/111.php?ckcookie=1";
header("location:".$url);
}
if(isset($_COOKIE['cookieon'])){
	echo "进入具体页面.....";
}else{
	echo "对不起，本站需要COOKIE功能 ，请开启您浏览器的COOKIE功能！";
}
*/

/*}}}*/

/*{{{  112 cookie用户登录 1控制php 2注删html 3登录html 4注册登录提交class 5登录退出之后class 
 *  
 * 2012-01-01 14:40 
 * */
//}}}

/*{{{ 113 SESSION */

//通过头来写入cookie
//header("Set-Cookie:class=php");
//echo $_COOKIE['class'];

//session_name('jm088');
//session_start();

//}}}

/* {{{ 114 SESSION的删除 */

//session_start();
//$_SESSION['web'] = "山货网";
//$_SESSION['url'] = "www.jm088.com";
//session_unset($_SESSION['webname']);　//清除session内容

//session_unset();//删除内存中的数据,必需放在session_destroy上
//session_destroy(); //删除session文件,SESSION_ID删除
//session_id(); //不能输出ID,必需放在session_destroy上
//etcookie(session_name(), '', 1, '/'); //删除cookie中session('/')必须要加作用域
//echo session_id();
//echo $_SESSION['web']; //如果内存中数据存在没有session_unset还可以输出

//setcookie('aa', '000');
//setcookie('aa', '000', 0, '/');
//setcookie('aa', '', 11);

//}}}

/*{{{   116 在浏览器不开启cookie时   

session_id("houdunwang");
session_start();
echo session_id();
echo "<br/>";
$_SESSION['webname']="后盾网";
$_SESSION['url']="bbs.houdunwang";

var_dump($_SESSION);
*/
//}}}

/* {{{　118　　提高session处理效率*/

//修改指定session 保存路径
//session_save_path('./tmp');
//session_start();
//session_destroy(); //删除session 文件

/*
ini_set("session.gc_probability", 1);
ini_set("session.gc_divisor", 1);
ini_set("session.gc_maxlifetime", 1);
 */

/*
//创建二级目录
$dir = "0123456789abcdefghijklmnopqrstuvwsyz";
for($i=0; $i<strlen($dir); $i++)
{
    for($j=0; $j<strlen($dir); $j++)
    {
        $dir_name = "./tmp/".$dir[$i]."/".$dir[$j];
        if(!file_exists($dir_name))
        {   //递归创建目录
            mkdir($dir_name, 0777, true) && print("目录: {$dir_name} 创建成功!<br/>");
        }
    }
}
*/

//(0-9 a-z) * (0-9 a-z)
/*
session_save_path("2;./tmp");
session_start();
$_SESSION['webname'] = "bbs.houdunwang.com";
$_SESSION['url'] = "后盾网论坛";
echo session_id();
 */
//}}}

/* {{{  119: 自定义SESSION处理机制 */
/*
ob_start();
//session默认文件处理更改成用户自定义
ini_set("session.save_hander", "user");

//(路径,name)
function start($path, $session_name)
{
    global $session_path;
    $session_path = $path;
    echo "start<br/>";
}
//读取
function read($sid)
{
    global $session_path, $session_file;//定义全局路径
    $session_file = $session_path.DIRECTORY_SEPARATOR.$sid;
    //第一次读会报错
    return @file_get_contents($session_file);
}
//写入(id,数据)
function write($sid, $data)
{
    var_dump($data);
    global $session_path, $session_file;//路径
    //创建文件
    return file_put_contents($session_file, $data)
        ?true
        :false;    
}
function destroy($sid)
{
    global $session_file;//session文件
    @ unlink($session_file);
    //卸载cookie
    setcookie(session_name(), '', 1, '/');
}
//撤销,卸载
function close()
{
    return true;
}
//垃圾处理(指定时间)
function gc($max_time)
{
    global $session_path;
    foreach( glob( $session_path."/*" ) as $file )
    {
        if( filemtime($file) + $max_time < time() )
        {
            unlink($file);
        }
    }
    return true;
}

//绑定php用这些函数处理session,不用php的,
//执行顺序(开,关,读,写,卸,垃)
session_set_save_handler("start", "close", "read", "write", "destroy", "gc");
session_start();
//session_destroy();
//$_SESSION['a'] = 1111;
//var_dump($_SESSION);
session_destroy();
session_unset();
*/
//}}}

/* {{{ 120 session 安全  */
/*
session_start();
//var_dump($_SERVER);

$_SESSION['chk'] = $_SERVER['REMTE_ADDR'].$_SERVER['HTTP_USER_AGENT'];
//var_dump($_SESSION);

if(isset($_SESSION['chk'])  && $_SESSION['chk'] != $_SERVER['REMTE_ADDR'].$_SERVER['HTTP_USER_AGENT']  )
{
    session_unset();
    session_regenerate_id();//重新生成session_id();
    echo "111"; //不会被输出
}

var_dump($_SESSION);
*/
//}}}

/* {{{ 121:mysql操作session机制 */

//function __autoload($classname)
//{
//    include $classname.".class.php";
//}

/*
class class121{
    function ad()
    {
        return __CLASS__."欢迎你!</br>";
    }
}
class php121
{
    function msg(){
        echo "<script type='text/javascript'>alert(location.href)</script>";
    }
}
*/
/*
class session
{
    static $db;//数据库操作句柄
    static $table;//SESSION表
    static $max_time;//SESSION过期时间
    static $card;//客户端身份信息
    //SESSION初始化
    static function run(){
        if(ini_get("session.save_handler") == "user" || ini_set("session.save_handler", "user") )
        {
            session_set_save_handler( 
                array(__CLASS__, "start"),
                array(__CLASS__, "close"),
                array(__CLASS__, "read"),
                array(__CLASS__, "write"),
                array(__CLASS__, "destroy"),
                array(__CLASS__, "gc")
            );
        ob_start(); //输入到缓冲区
        self::$db = new mysqli("localhost", 'root', '123456', 'jm088_m');
        mysqli_connect_errno(); //or die("数据库连接错误");
        self::$db->query("SET NAMES utf8");//编码
		self::$table="session"; //表名
		self::$max_time = 1000;//最大时间 10分
        self::$card = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']); //标识
        session_start();
        }
    }
    //开
    static function start($path, $session_name)
    {
        return true;
    }
    //关
    static function close()
    {
        self::gc(self::$max_time); //垃圾回收
		self::$db->close();
		return true;
    }
    //读
    static function read($sid)
    {
        $sql  = "SELECT `data` FROM ".self::$table." WHERE `sid` ='{$sid}' AND `card`='".self::$card."'";
		$result = self::$db->query($sql);
		$row = $result->fetch_assoc();
		return self::$db->affected_rows>0 ? $row['data'] : '';//返回数据
    }
    //写
    static function write($sid,$data)
    {
        $sql  = "SELECT `sid` FROM ".self::$table." WHERE `sid` ='{$sid}' AND `card`='".self::$card."'";	
		$result = self::$db->query($sql);
		$mtime = time();
        if(self::$db->affected_rows>0)
        {
			$sql = "UPDATE ".self::$table." SET `data` ='{$data}',`mtime` ='{$mtime}' 
                WHERE `sid`='{$sid}'";	
        echo $sql;     
		}else{
			$sql = "INSERT INTO ".self::$table." (`sid`,`data`,`mtime`,`ip`,`card`) VALUES('{$sid}','{$data}','".time()."','{$_SERVER['REMOTE_ADDR']}','".self::$card."')";
		}
		return self::$db->query($sql)?true:false;
    }
    //卸
    static function destroy($sid)
    {
        $sql = "DELETE FROM ".self::$table." WHERE `sid`='{$sid}'";
		self::$db->query($sql);
		return true;
    }
    //删
    static function gc($max_time)
    {
		$max_time = self::$max_time;
		$sql = "DELETE FROM ".self::$table." WHERE `mtime`<'".(time()-$max_time)."'";
		self::$db->query($sql);
		return true;        
    }
}
*/
/*
//$conn = mysqli_connect("localhost","root",'123456','jm088_m');
$conn = new mysqli("localhost","root",'123456','jm088_m');
if(mysqli_connect_errno()){
echo 'connect failed';
exit;
}
mysqli_query($conn,'set names utf8');
$result = mysqli_query($conn, 'SELECT * FROM pro_class');
$num_row = mysqli_num_rows($result);
echo $num_row;
mysqli_free_result($result);
mysqli_close($conn);
*/

//session::run();
/*
$_SESSION['webname'] = "后盾网";
$_SESSION['weburl'] = "www.jm088.com";
$_SESSION['php'] = "I like";
 */
//var_dump($_SESSION);
//session_destroy();

//phpinfo();
/*
$hdw = new class121();
echo $hdw->ad();
$php121 = new php121();
$php121->msg();
*/
//}}}

/*{{{ 122:session 持久会话 */

//对本页面修改session过期时间20秒
session_set_cookie_params(20);

ob_start();
var_dump( session_get_cookie_params() );

session_start();

session_id();





//}}}

?>

