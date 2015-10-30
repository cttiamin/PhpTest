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
	echo "添加商品失败";
}
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<title>添加商品</title>
 <LINK href="css/reg.css" type=text/css rel=stylesheet>
</head>
<body>	
<form action="" method="POST">
<div class="mainbox formbox">		
<h1>添加商品</h1>
<table  cellpadding="0" cellspacing="0">
<thead>
<tr>
<th>商品信息( * 为必填项)</th>
<td> </td>
</tr>
</thead>

<tr>
<th>商品编号  *</th>
<td><input type="text" name="item_number"></td>
</tr>
<tr>
<th>商品名称  *</th>
 <td><input type="text" name="item_name"></td>
</tr>
<tr>
<th>商品价格  *</label>
</th>
<td><input type="text" name="item_price">元（数字）</td>
</tr>
<tr>
<th>商品类别 *</th>
<td><input type="text" name="item_type"></td>
</tr>

</table>
<table summary="Submit Button" cellpadding="0" cellspacing="0">
<tbody><tr>
<th> </th>
<td>
<button class="submit" type="submit" name="submit">提交</button>
<button class="reset" type="reset" name="reset">重写</button>
</td>
</table>
</form>
</body>
</html>
