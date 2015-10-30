<?php
function replace($row,$username='',$password='',$introduce=''){
	$row=str_replace("%username%",$username,$row);
	$row=str_replace("%password%",$password,$row);
	$row=str_replace("%introduce%",$introduce,$row);
	return $row;
}
$id=$_GET['id'];

if (@fopen("pages/user_$id.htm","r")==false)  {
	

	mysql_connect("localhost","root","123456") or die("connect error");
	
	mysql_select_db("sanyang") or die("dababase error");
	$query=mysql_query("select * from userinfo3 where id='$id'")or die("查询失败");	
	if ($query) {
		$fs=mysql_fetch_row($query);
		$username=$fs[1];
		$password=$fs[2];
		$introduce=$fs[3];
		$f_tem=fopen("template.htm","r");
		$f_new=fopen("pages/user_$id.htm","w");
		
		while (!feof($f_tem)) {
			$row=fgets($f_tem);
			$row=replace($row,$username,$password,$introduce);
			fwrite($f_new,$row);
		}
		fclose($f_new);
		fclose($f_tem);
	}
	mysql_close();
	echo "数据库查询结果";
}else{ 
echo "缓存数据";
include("pages/user_$id.htm");
}
?>