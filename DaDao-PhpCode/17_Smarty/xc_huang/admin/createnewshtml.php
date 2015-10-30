<?php require_once('../include/conn.php'); ?>

<?php

$url="http://localhost/news_display.php?id=";
$sqlstr="select * from n_article ";
$query=mysql_query($sqlstr);
while($rs=mysql_fetch_array($query)){
	$urlstr=$url.$rs['a_id'];
	$f="../html/".$rs['a_id'].".html";
	//echo $f;
	//echo "<br>";
	
	$fp=fopen($urlstr,"r");
	$str=file_get_contents($urlstr);
	fclose($fp);
	$createpage=fopen($f,"w");
	fwrite($createpage,$str);
	fclose($createpage);
	echo "<script language='javascript'>";
	echo "document.write('".$f."页面生成成功<br>');";
	echo "</script>";

}



?>
<?php require_once('../include/close.php'); ?>

