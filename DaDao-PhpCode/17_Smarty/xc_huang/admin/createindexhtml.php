<?php
$url="http://localhost/default.php";
//echo $url;
//exit();
$fp=fopen($url,"r");//用只读方式来打开远程页面
$str=file_get_contents($url);//读取页面内容并且赋值给变量$str;
fclose($fp);

//echo $str;
//exit();
$abc=fopen("../index.html","w");//用可写入的方式打开一个文件(如果文件不存,则打开一个空文件)
fwrite($abc,$str);//把刚才读取到的内容写入文件
fclose($abc);
echo "<script language='javascript'>";
echo "document.write('首页生成成功');";
echo "</script>";
?>