<?php
include("conn.php");
if (isset($_POST['item_number'],$_POST['item_name'],$_POST['item_price'],$_POST['item_type'])){
$item_number=$_POST['item_number'];
$item_name=$_POST['item_name'];
$item_price=$_POST['item_price'];
$item_type=$_POST['item_type'];
$query="INSERT INTO item (item_number,item_name,item_price,item_type) 
VALUES ('$item_number','$item_name',$item_price,'$item_type')";
if (@$conn->query($query)) {
	$page="select_item.php";
	header("Location:$page");
}else {
	echo "�����Ʒʧ��";
}
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>�����Ʒ</title>
 <LINK href="css/reg.css" type=text/css rel=stylesheet>
</head>
<body>	
<form action="" method="POST">
<div class="mainbox formbox">		
<h1>�����Ʒ</h1>
<table  cellpadding="0" cellspacing="0">
<thead>
<tr>
<th>��Ʒ��Ϣ( * Ϊ������)</th>
<td> </td>
</tr>
</thead>

<tr>
<th>��Ʒ���  *</th>
<td><input type="text" name="item_number"></td>
</tr>
<tr>
<th>��Ʒ����  *</th>
 <td><input type="text" name="item_name"></td>
</tr>
<tr>
<th>��Ʒ�۸�  *</label>
</th>
<td><input type="text" name="item_price">Ԫ�����֣�</td>
</tr>
<tr>
<th>��Ʒ��� *</th>
<td><input type="text" name="item_type"></td>
</tr>

</table>
<table summary="Submit Button" cellpadding="0" cellspacing="0">
<tbody><tr>
<th> </th>
<td>
<button class="submit" type="submit" name="submit">�ύ</button>
<button class="reset" type="reset" name="reset">��д</button>
</td>
</table>
</form>
</body>
</html>
