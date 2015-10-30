<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>分页显示</title>
<LINK href="css/css.css" type=text/css rel=stylesheet>
</head>
<body>
<div class="mainbox threadlist">
 <div class="headactions">
</div>
<h1>分页显示的效果</h1>
 <table class="portalbox"  cellpadding="0" cellspacing="1" >
 <thead class="separation">
<tr>
		<td>emp_id</td>	
		<td>emp_number</td>	
		<td>emp_name</td>
		<td>emp_age</td>
</tr>
	</thead>
	</div>
<?php
$db_host="localhost";//服务器
$db_user="root";//用户名
$db_psw="root";//密码
$db_name="sunyang";//数据库名
$connection=mysql_connect($db_host,$db_user,$db_psw) or die("连接服务器失败");
mysql_select_db($db_name,$connection) or die("选择数据库失败");
$query1="select * from employee";
$result=mysql_query($query1) or die("查询数据失败");//执行查询
$rowsPerPage=2;//每一页显示的行数
$maxRowCount=mysql_num_rows($result);//总行数
//计算总页数
if($maxRowCount%$rowsPerPage==0){
	$maxPage=(int)($maxRowCount/$rowsPerPage);
}else {
	$maxPage=(int)($maxRowCount/$rowsPerPage)+1;
}
//获取当前页
if (isset($_GET['curPage'])){
	$page=$_GET['curPage'];
}else {
$page=1;	
}
$start=$rowsPerPage*($page-1);//起始记录数
$query2="select * from employee order by emp_id limit $start,$rowsPerPage ";
$result=mysql_query($query2) or die("查询数据失败");//执行查询
//通过while循环将数组中的值输出
while($row =mysql_fetch_array($result) ){	
?>
<tr>
		<td><?php echo ($row['emp_id']);?></td>	
		<td><?php echo ($row["emp_number"]); ?></td>	
		<td><?php echo ($row["emp_name"])?></td>
		<td><?php echo ($row["emp_age"]);?></td>		
</tr>
<?php } ?>
 <tr>
 <td colspan="4" >
 <div class="pages">
<?php

//当前页不是第一页
if ($page>1) {
	$prevPage=$page-1;//上一页
	echo "<a href='?curPage=$prevPage'>上一页</a>";
}
if($page<$maxPage){
	$nextPage=$page+1;//下一页
	echo "<a href='?curPage=$nextPage'>下一页</a>";	
}
mysql_free_result($result);
mysql_close($connection);
?>
</div>
 </td>
 </tr> 
</table>
</body>
</html>
