<?php
//display_errors = on 不显示出错提示

//上传漏洞	,判断文件类型

//提交表单漏洞,

//sql注入漏洞
//攻击方法： ?id=1 and 1=1  ,也同样会输出
//攻击方法： ?id=1 and 1=2  ,也同样会输出
//攻击方法： ?id=1 and (select length(name) from admin)>0 ,admin为管理员名，如果对则不显示错误信息
//攻击方法： ?id=1 and (select ascii(substr(adminName,1,1)) from admin limit 0,1)=97 ,asii为转换为二进制码，如果为97说明开头为a,
$db=mysql_connect("localhost","root","123456");
mysql_select_db("sanyang");
$id=$_GET["id"];
$id=int($_GET['id']); //解决这种方法就是将，转换为整形的，
$result=mysql_query("select * from others where id=$id");
if(mysql_num_rows($result)>0){
	echo "No 1 user";
}else echo "no this user";


?>