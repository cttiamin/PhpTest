<?php
$url="http://localhost/about.php";
$fp=fopen($url,"r");
$str=file_get_contents($url);
fclose($fp);
//echo $str;

$abc=fopen('../html/about.html',"w");//以写入的方式打开要生成的文件(当前这个文件是空的),这里的w为小写字母
fwrite($abc,$str);//把刚才替换的内容写入文件
fclose($abc);
?>