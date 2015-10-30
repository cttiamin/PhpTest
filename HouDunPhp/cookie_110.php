<?php
/*
 *
 */

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

setcookie('myname', 'etcphp');
echo $_COOKIE['myname'];









?>
