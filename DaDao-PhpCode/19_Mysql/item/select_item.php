<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>显示商品列表</title>
<LINK href="css/css.css" type=text/css rel=stylesheet>
</head>

<body>
<div class="mainbox threadlist">
 <div class="headactions">
</div>
<h1>商品信息列表</h1>
 <table class="portalbox"  cellpadding="0" cellspacing="1" >
 <thead class="separation">
<tr>
		<td>商品编号</td>	
		<td>商品名称</td>	
		<td>商品价格(元)</td>
		<td>商品类别</td>
		<td>操作</td>
	</tr>
	</thead>
	</div>
<?php
include("conn.php");
if (isset($_GET['id'])){
$id=$_GET['id'];
$query="delete from item where item_id=$id";	
$conn->query($query);
}
$query="select * from item";
$result_info=$conn->arrayQuery($query);



foreach($result_info as $items){
?>
	<tr>
		<td><?php echo $items[1];?></td>	
		<td><?php echo $items[2];?></td>	
		<td><?php echo $items[3];?></td>
		<td><?php echo $items[4];?></td>
		<td><a href="update_item.php?id=<?php echo $items[0];?>">修改</a>	
		<a href="?id=<?php echo $items[0];?>">删除</a></td>	
	</tr>
<?php } ?>
</table>
<center><a href="insert_item.php">添加商品</a>	</center>
</body>
</html>
