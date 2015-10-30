<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>分页显示</title>
</head>

<body>
<table width="576" height="88" border="1" cellpadding="0" cellspacing="0" bordercolor="#0000FF">
  <tr>
    <td colspan="4" align="center">分页显示的效果</td>
  </tr>
  <tr>
    <td>emp_id</td>
    <td>emp_number</td>
    <td>emp_name</td>
    <td>emp_age</td>
  </tr>
  <?php
$db_host="localhost"; //服务器
$db_user="root";
$db_pws="123456";
$db_name="sunyang";
$connection=mysql_connect($db_host,$db_user,$db_pws)or die("连接服务器失败");
mysql_select_db($db_name,$connection);
$query="select * from employee2";
$result=mysql_query($query)or die("查询失败");
//exit;
$rowsPerPage=2; //每一页的行数
$maxRowCount=mysql_num_rows($result);//总行数
//计算总页数
if($maxRowCount&rowPerPage==0){
	$maxPage=(int)($maxRowCount/$rowsPerPage);
}else{
	$maxPage=(int)($maxRowCount/$rowsPerPage)+1;
}
if(isset($_GET['curPage'])){
	$page=$_GET['curPage'];
}else{
	$page=1;
}
$start=$rowsPerPage*($page-1);//起始记录数
//echo $rowsPerPage;
//echo $s
//exit;
$query2="select * from employee2 order by emp_id limit $start,$rowsPerPage";
$result=mysql_query($query2) or die ("查询数据失败"); // 执行查询
//通过while循环将数组中的值输出
while($row = mysql_fetch_array($result)){
  ?>
  <tr>
    <td><?php echo ($row['emp_id']);?></td>
    <td><?php echo ($row['emp_number']);?></td>
    <td><?php echo ($row['emp_name']);?></td>
    <td><?php echo ($row['emp_age']);?></td>
  </tr>
<?php } ?>
  <tr>
    <td colspan="4" align="right">
    <?php
    if($page>1){
    	$prevPage=$page-1; //上一页
    	echo "<a href='?curPage=$prevPage'>上一页</a>";
    }
    if($page<$maxPage){
    	$nextPage=$page+1;//下一页
    	echo "<a href='?curPage=$nextPage'>下一页</a>";
    }
    mysql_free_result($result);
    mysql_close($connection);
    ?>
    &nbsp;</td>
  </tr>
</table>
</body>
</html>
