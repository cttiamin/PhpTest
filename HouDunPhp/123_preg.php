<?php


/*  LastChange : 12/5/20
 *
 *  模式修饰符
 *  i: 不区分大小写
 *  s: .点号元字符匹配所有字符, 包含换行符.
 * */

/**{{{*****124: 原子表**********************************************
 *  
 *
 * 常用:
 *  \d = [0-9]
 *  \w = [a-z]
 *  ^ : 取反
 *  / * / : 定界符
 *  is : 修饰符
 * */

/*
$arr = array("后盾网","http:www.houdunwang.com", "bbs.houdunwang.com");
echo count($arr);
 */

/* {5,} 5次以上
$str = "http://www.houdunwang.com";
echo preg_match("/w{5,}/is", $str) ? "OK" : "no";
 */

/*
$str = "bbs.houdunwang.com323.dsfds ewiewo";
echo preg_match("/[A-C]/is", $str, $arr) ? "找到": "合法";
var_dump($arr);
 */

/* ^:取反
 * \d: 数字
 * [^\d] :不是数字
$str = "www.houdunwang.com55uuu";
echo preg_match("/\.com[^\d]/is", $str, $arr) ? "合法" : "不合法";
var_dump($arr);
}}}*/

/**{{{***** 125: 原子组 *******************************************
 *
 * */

/*
$houdunwang = <<<str
    <html>
        <body>
<h1>后盾网PHP 教程</h1>
<h2>后盾网DREAMWER, css 教程 </h2>
<h3>后盾网javascript教程 </h3>
<h4>后盾网Jquery教程 </h4>
        </body>
    </html>
str;
 */

//echo $houdunwang;

// $preg  = "/(<h1>|<h2>)(.*?)(<\/h1>|<\/h2>)/is";

/* 第2种方式
 * $preg = "/<(h1|h2)>(.*?)<\/(h1|h2)>/is";
 * */ 

/* 用别名houdunwang的方式匹配,定义h1|h2为别名为jm088
 * $preg = "/<(?'jm088'h1|h2)>(.*?)<\/(\k'jm088')>/is";
 * */ 

/* (组号)\1: 第一，\2:第二个, 到９９个，双引号中用两条(\\)，单引号中一条
 * $preg = "/<(h\d{1})>(.*?)<\/(\\1)>/is";
 * */

/*
preg_match_all($preg, $houdunwang, $arr, PREG_SET_ORDER);
var_dump($arr);
 */

/* 把所有<h> 标签中换<strong>
 * $str = preg_replace($preg, '<strong>\\2</strong>', $houdunwang);
 * var_dump($str);
 * */

/* 把<h>标签中内容换成http://www...
$str = preg_replace($preg, "<\\1>http:www.houwang.com<\\3>", $houdunwang);
echo $str;
}}}*/


/***{{{***126: 不缓存模式及正则注释***********************************
 * 
 *
 * */

$houdunwang = <<<str
<html>
<body>
  <h1>后盾网网址:http://www.houdunwang.com</h1>
  <h2>后盾网论坛:http://bbs.houdunwang.com</h2>
<h1>Jquery视频教程</h1>
<h3>后盾网论坛:http://php.houdunwang.net</h3>
<h2>Photoshop PS5视频教程</h2>
</body>
<html>
str;
//echo $houdunwang;
//正常下:
//$preg = "/(www|bbs)\.houdunwang.com/is";
//不缓存下(去掉分组序列号):
//$preg = "/(?:www|bbs)\.houdunwang.com/is";
//$preg = "/(?:www|bbs|php)\.houdunwang((?:\.)(?:com|net))/is";

//preg_match_all($preg, $houdunwang, $arr, PREG_SET_ORDER);
//var_dump($arr);
/*
preg_match_all($preg, $houdunwang, $arr );
var_dump($arr);
//var_dump($arr[1]);
echo "使用了".implode(",", $arr[1]);
 */

/*正则的注释 (?# )
$preg = "/<(h\d{1})>(?#匹配HTML标签的头).*?(?#匹配标题标签正文)<\/(\\1)>/is";
preg_match_all($preg, $houdunwang, $arr, PREG_SET_ORDER);
var_dump($arr);
}}} */

/**************************************************************************{{{
 * 127 重复匹配_1
 *  (\w*)
 *  . :任意字符
 *  * :0-多个
 * */
/*
$str = "后盾网http://www.houdunwang.com 百度: http://www.baidu.com 淘宝:http:www.taobao.com ";
$str2 = "www..com";
$preg = "/\.(\w*)\./is";
$static = preg_match_all($preg, $str, $arr, PREG_SET_ORDER);
if($static){
    echo "匹配成功!</br>";
    var_dump($arr);
}else{
    die("Error:失败");
}
*/

/* 测试文件*
 * + : 一次域者多次
 */
//$arr = '';
//$str = file_get_contents("127_preg.php");
//echo $str;
//$preg = "/(\/\*+)(.*?)(\*\/)/is";
/* 
preg_match_all($preg, $str, $arr, PREG_SET_ORDER);
var_dump($arr);
*/
/* \r :回车
 * \n :空格
 * 
$data = preg_replace($preg, "\\1 \r\n * 后盾网http://www.houdun.com \\2 \\3", $str);
file_put_contents("127_preg.php", $data);
}}}*/

/*******************************************************************{{{
 *  128_重复匹配_2 : 验证手机，坐机，
 * 
 * */


//$str = "houdunwang.com";
// *：零个或多个
// +: 最少要有一个
//$preg = "/houd*/is";
/*
try{
    if(preg_match($preg, $str, $arr)){
        var_dump($arr);
    }else{
        throw new Exeption("匹配失败！");
    }
} catch (Exeption $e){
    echo $e-getMessage();
}
 */

/*验证邮箱
 *
 *
$email = "houdunwang.admin@qq.com";
// ^ss : 必须以ss 开头
// bbb$ : 必须以bbb 结尾
$preg = "/^(\w+)(\.\w+)@(\w+)\.(com|net|cc|info|so|org )$/is";

if(preg_match($preg, $email, $arr)){
    var_dump($arr[0]);
}else{
    echo "匹配失败!";
}
 */

/*  
 * 
$str = "baiiiidu.com";
$preg = "/bai*du?/is";
try{
    if(preg_match($preg, $str, $arr)){
        echo $arr[0];
    }else{
        throw new Exception("ERROR!");
    }
}catch (Exception $e){
    echo $e->getMessage();
}
 */

/* 验证是否为一个整数,小数
 * -222, 666
 *
 * \d {0,3} : 0-3个
 * 

$str = -86666.55;
$preg = "/^-?\d+\.?\d{0,3}+$/is";
if(preg_match($preg, $str, $arr)){
    echo $arr[0];
}else{
    echo "失败";
}
}}}*/

/*******************************************************************{{{
 * 129.重复匹配_3 : 
 * 
 * */

/*
$str = "houddunwang.com.cn";
// houd{2} : 限制d 必须出现两次
$preg = "/^[a-z]+\.(com|net|info|org|cc|([a-z]{2,3}.[a-z]{2}))$/is";
try{
    if(preg_match($preg, $str, $arr)){
        echo $arr[0];
    }else{
        throw new Exception("error");
    }
}catch (Exception $e){
    echo $e->getMessage();
}
 */

/*
$str = "56789";
// \d{2,} :最少两个.
$preg = "/^\d{2,}$/is";

if(preg_match($preg, $str, $arr) ){
    echo $arr[0];
}else{
    echo "错误";
}
 */

/* 坐机号 

$str1 = "(010)64325057";
$str2 = "010-64825057";
$str3 = "64825057";
$str4 = "0570-12345678";

$preg = "/^(\([0-9]{3,4}\)|[0-9]{3,4}-)?[0-9]{8}$/is";

try{
    if(preg_match($preg, $str4, $arr)){
        echo $arr[0];
    }else{
        throw new Exception("电话不对");
    }
}catch (Exception $e){
    echo $e->getMessage();
}
 */

/* 验证手机号.
 * 
$str1 = 12233498795;
$str2 = 12233498795;
$str3 = 12233498795;

$preg = "/^1[3-8]{1}[0-9]{9}$/is";
    if(preg_match($preg, $str, $arr)){
        echo $arr[0];
    }else{
        echo "error";
    }   
 */

/*  用户名
 *
$str = "adminasfd";
$preg = "/^[a-zA-Z]\w{5,17}$/";
try{
    if(preg_match($preg, $str, $arr)){
        echo "用户名正确,可以注册!";
    }else{
        throw new Exception("用户名格式错误");
    }
}catch (Exception $e){
    echo "<strong style='color:#f00'>".$e->getMessage()."</strong>";
}  
}}} */


/******************************************************************* {{{
 * 130 : 贪婪匹配与禁止贪婪匹配
 * 
 * */
/*
$str = "abbbbbbbbbbbbbbbbbbbbbbcc";
$preg = "/ab+/is";
preg_match($preg, $str, $arr);
echo $arr[0];
 */
/*
$str = "<a href='http://www.baidu.com'>百度</a>  <a href='http://www.taobao.com'>淘宝</a>";
//echo $str;
// \s: 空格 
//$preg = "/href\s*=\s*'(.*)\s*'\s*>/is";
//贪婪模式:
//$preg = "/href='(.*)>/is";
//禁止贪婪
//? :0-1个
$preg = "/href='(.*?)'>/is";

preg_match_all($preg, $str, $arr, PREG_SET_ORDER);
var_dump($arr);
 */


/*把　130_preg_class.php 的注释替换掉 

//$class = include "130_preg_class.php";
$class = file_get_contents("130_preg_class.php");
$preg = "/\/\*.*?\*\//is";
$class = preg_replace($preg, '', $class);
file_put_contents("130_preg_class1.php", $class );
 */

/*
 * 
$a = "cbbaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
//$preg = "/ba+/is";
//$preg = "/ba{2,}?/is";
$preg = "/ba??/is";
preg_match($preg, $a, $arr);
echo $arr[0];
}}}*/

/*******************************************************************{{{
 * 131 : 匹配边界
 * 
 * */
/*
$str = "66ddd";
//限制区间是一个完全匹配的整数
$preg = "/^-?\d+$/is";
preg_match($preg, $str, $arr);
var_dump($arr);
 */

/*
$str = "Hello word my name is xiangjun";
// \b: 空格,或边界
// \B: 空格取反
$preg = "/\bxiang\B/is";
preg_match($preg, $str, $arr);
var_dump($arr)
}}} */


/*******************************************************************{{{
 * 132 : 匹配边界
 * 
 * */
//$str = "h111\nh12222\nh3333";
//$preg = "/^h\d+$/";
// m: 把一行分割为多行
/*
$preg = "/^h\d+$/m";
preg_match_all($preg, $str, $arr);
var_dump($arr);
 */
// \A :只匹配开头
/*
$preg = "/\Ah\d+/m";
preg_match_all($preg, $str, $arr);
var_dump($arr);
 */
// \Z: 只匹配结尾
/*
$preg = "/^h\d+\Z/m";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/
/*
$preg = "/h\w+\z/";
preg_match_all($preg, $str, $arr);
var_dump($arr);
}}}*/


/*******************************************************************{{{
 * 133 : 断言匹配
 * 
 * */
/*
$str = "www.houdunwang.com";
$preg = "/(?<=www\.).*(?=\.com)/is";
preg_match($preg, $str, $arr);
var_dump($arr);
 */
/*
$str = "php python pear";
//$preg = "/\bp(?!h)\w+\b/is";
$preg = "/\bp(?=h)\w+\b/is";
preg_match_all($preg, $str, $arr);
var_dump($arr);
 */

/*
$str = "@houdunwang.com@taobao.com@sina.com@sohu.com#yahoo.com&";
$preg = "/(?<=@).*?(?=[@#])/is";
preg_match_all($preg, $str, $arr);
var_dump($arr);
}}}*/

/*******************************************************************{{{
 * 134 : 模式修正符
 * i:不区分大小写 
 * */
/*
$str = "www.houdunwang.com";
$preg = "/houdunWang/i";
preg_match_all($preg, $str, $arr);
var_dump($arr);
 */

/*
 * m: 多行匹配内容,修饰 $,^
 *
$str = "<a href='http://www.baidu.com'>baidu.com</a>\n<a href='http://www.sina.com.cn'>sina.com.cn</a>";
//echo $str;
$preg = "/^<a.*a>$/m";
preg_match_all($preg, $str, $arr, PREG_SET_ORDER);
var_dump($arr);
*/

/*
 * 模式修正符可以结合使用
$str = "<div id='d1'>这是第一个div</div>\n<div id='d2'>这是第二个div</div>";
$preg = "/<div .*>(.*)<\/div>/im";
preg_match_all($preg, $str, $arr, PREG_SET_ORDER);
var_dump($arr);
 */

/* s: .* 可以匹配到 \n, 可以匹配任意符
 * s将字符串视为单行, 使.可以匹配到换行符
 * 

$str = "<div style='border:solid 1px #dcdcdc;  width:500; height:500px;'><p>这是第一段</p>\n<p>这是第二段</p></div>";
//echo $str ;
$preg = "/<div .*?>(.*)<\/div>/s";
preg_match($preg, $str, $arr);
var_dump($arr);
}}} */

/************************************************************
 * 135 : 
 * 
 * */

/*
 *  x: 模式中的空白忽略不计
 * 
$str = "http://www.houdunwang.com";
$preg = "/houdun wang.com/x";
preg_match($preg, $str, $arr);
var_dump($arr);
 */

/* U:匹配最近的字符串内容,禁止贪婪匹配
 * 
$str = "<div>后盾网www.houdunwang.com</div><div>百度www.baidu.com</div>";
$preg = "/<div>(.*)<\/div>/Ui";
preg_match_all($preg, $str, $arr);
var_dump($arr);
 */

/*  A :强制从开始算起到结尾,不拆分
 *  
$str = "<h1>后盾网视频教程人人做后盾</h1>\n<h1>百度搜索引擎</h1>";
$preg = "/^<h1>(.*)<\/h1>/AUim";
preg_match_all($preg, $str, $arr);
var_dump($arr);
*/

/* D: 设置$符号仅匹配到目标字符串的结尾,设置m模式修正符后失效
 *
$str1 = "houdunwang.com\nwww.baidu.com\n";
$str2 = "houdunwang.com";
$str3 = "www.baidu.com";
$preg = "/.com$/Dm";
preg_match_all($preg, $str1, $arr);
var_dump($arr);
 */

/* e:替换字符串当成表达式来使用,
 *
 * 
$str = "</p>北京<a href='http://www.baidu.com'>百度搜索引擎</a></p>
    <h1><a href='http://www.ku6.com'>酷6</a>视频网站</h1>
    ";
// U : 禁止贪婪
// e:当成 eval(); 来执行
$preg = "/<a\s+href=(('|\").*\\2)>.*<\/a>/Uise";
$new_str = preg_replace($preg, "str_replace('\\1','\"http://www.houdunwang.com\"','\\0')", $str);
echo $new_str;
*/

/*******************************************************************
 * 136 : 函数的使用:
 *
 * PREG_OFFSET_CAPTURE 得到偏移量
 * 后数字:从偏移量开始
 * */
/*
$str = "houdunwang.com";
$preg = "/u/is";
//$stat = preg_match($preg, $str);
//echo $stat;

if(preg_match($preg, $str, $arr, PREG_OFFSET_CAPTURE,3)){
    //echo "匹配成功!";
    var_dump($arr);
}else{
    echo "失败!";
}
 */

/*
 * 
$str2 = "后盾论坛bbs.houdunwang.com后盾官网www.houdunwang.com";
//$preg = "/\.com/is";
$preg = "/([a-z]+)\.houdunwang\.com/is";
if( preg_match_all($preg, $str2, $arr, PREG_PATTERN_ORDER, 20) ){
    echo "匹配成功!<br/>";
    var_dump($arr);
}else{
    echo "没找到!!!";
}
*/

/*******************************************************************
 * 137 : 函数的使用
 * 
 * */

/*******************************************************************
 * 138 : 
 * 
 * */

/*******************************************************************
 * 139 : 
 * 
 * */

?>


