<?php
header("Content-type:text/vnd.wap.wml");
header("Cache-Control:no-cache,must-revalidate");
header("Pragma:no-cache");
header("Content-type:text/vnd.wap.wml;charset=gb2312");
echo("<?xml version=\"1.0\" encoding=\"gb2312\"?>");
?>
<!DOCTYPE wml PUBLIC "-//WAPFORUM//DTD WML 1.1//EN"
"http://www.wapforum.org/DTD/wml_1.1.xml">
<wml>
<card id="card2" title="选择结果">
<p>
<?php
echo("您选择了:");
if($_REQUEST['choice']=="rock"){
	echo("摇滚乐<br/>\n");
}else if ($_REQUEST['choice']=="pop"){
	echo("流行乐<br/>\n");
}else if ($_REQUEST['choice']=="jazz"){
	echo("爵士乐<br/>\n");
}else if ($_REQUEST['choice']=="nation"){
	echo("民族乐<br/>\n");
}
?>
</p>
</card>
</wml>