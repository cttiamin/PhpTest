<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>��ʾ��Ʒ�б�</title>
<LINK href="css/css.css" type=text/css rel=stylesheet>
</head>

<body>
<div class="mainbox threadlist">
 <div class="headactions">
</div>
<h1>��Ʒ��Ϣ�б�</h1>
 <table class="portalbox"  cellpadding="0" cellspacing="1" >
 <thead class="separation">
<tr>
		<td>��Ʒ���</td>	
		<td>��Ʒ����</td>	
		<td>��Ʒ�۸�(Ԫ)</td>
		<td>��Ʒ���</td>
		<td>����</td>
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
		<td><a href="update_item.php?id=<?php echo $items[0];?>">�޸�</a>	
		<a href="?id=<?php echo $items[0];?>">ɾ��</a></td>	
	</tr>
<?php } ?>
</table>
<center><a href="insert_item.php">�����Ʒ</a>	</center>
</body>
</html>
