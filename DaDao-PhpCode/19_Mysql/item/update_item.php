<?php
include("conn.php");
if (isset($_POST['item_id'],$_POST['item_name'],$_POST['item_number'],$_POST['item_price'],$_POST['item_type'])){
$item_id=$_POST['item_id'];	
$item_number=$_POST['item_number'];
$item_name=$_POST['item_name'];
$item_price=$_POST['item_price'];
$item_type=$_POST['item_type'];
$query="update item set item_number='$item_number',item_name='$item_name',item_price=$item_price,item_type='$item_type' where item_id=$item_id ";
if (@$conn->query($query)) {
	$page="select_item.php";
	header("Location:$page");
}else {
	echo "������Ʒʧ��";
}
}
if (isset($_GET['id'])){
$id=$_GET['id'];
$query="select * from item where item_id=$id";
$result_info=$conn->arrayQuery($query);
foreach($result_info as $items){
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>�޸���Ʒ</title>
 <LINK href="css/reg.css" type=text/css rel=stylesheet>
</head>
<body>	
<form action="" method="POST">
<div class="mainbox formbox">		
<h1>�޸���Ʒ</h1>
<table  cellpadding="0" cellspacing="0">
<input type="hidden" name="item_id" value="<?php echo $items[0];?>" />
<thead>
<tr>
<th>��Ʒ��Ϣ( * Ϊ������)</th>
<td> </td>
</tr>
</thead>

<tr>
<th>��Ʒ���  *</th>
<td><input type="text" name="item_number" value="<?php echo $items[1];?>" ></td>
</tr>
<tr>
<th>��Ʒ����  *</th>
 <td><input type="text" name="item_name" value="<?php echo $items[2];?>" ></td>
</tr>
<tr>
<th>��Ʒ�۸�  *</label>
</th>
<td><input type="text" name="item_price" value="<?php echo $items[3];?>" >Ԫ�����֣�</td>
</tr>
<tr>
<th>��Ʒ��� *</th>
<td><input type="text" name="item_type" value="<?php echo $items[4];?>" ></td>
</tr>

</table>
<table summary="Submit Button" cellpadding="0" cellspacing="0">
<tbody><tr>
<th> </th>
<td>
<button class="submit" type="submit" name="submit">�޸�</button>
<button class="reset" type="button"  onClick="javascript:history.back()" name="back">����</button>
</td>
</table>
</form>
</body>
</html>
<?php 
}
}else {
	$page="select_item.php";
	header("Location:$page");
}
?>