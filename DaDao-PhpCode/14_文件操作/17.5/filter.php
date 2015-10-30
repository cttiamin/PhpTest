<?php
$content=file_get_contents("file://C:/sunyang.txt");	//获取文件
if(strlen($content)>0){	//如果不为空
	$file="C:/qq.txt";	
	$f=fopen("$file",'w');	//打开
	fwrite($f,$content);	//写入
	fclose($f);	
	echo "成功读取文件".filesize($file)."字节<br><br>";
//使用过滤器去除网页中的HTML标签
	$array=file("php://filter/read=string.tolower/resource=$file");
	foreach ($array as $num=>$content){
		if(strlen(trim($content))==0){
			continue;
		}
		printf('%s%d%s : %s<br>',"第",$num+1,"行",$content);
	}
}
?>
