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
	echo "更新商品失败";
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
<title>修改商品</title>
 <LINK href="css/reg.css" type=text/css rel=stylesheet>
</head>
<body>	
<form action="" method="POST">
<div class="mainbox formbox">		
<h1>修改商品</h1>
<table  cellpadding="0" cellspacing="0">
<input type="hidden" name="item_id" value="<?php echo $items[0];?>" />
<thead>
<tr>
<th>商品信息( * 为必填项)</th>
<td> </td>
</tr>
</thead>

<tr>
<th>商品编号  *</th>
<td><input type="text" name="item_number" value="<?php echo $items[1];?>" ></td>
</tr>
<tr>
<th>商品名称  *</th>
 <td><input type="text" name="item_name" value="<?php echo $items[2];?>" ></td>
</tr>
<tr>
<th>商品价格  *</label>
</th>
<td><input type="text" name="item_price" value="<?php echo $items[3];?>" >元（数字）</td>
</tr>
<tr>
<th>商品类别 *</th>
<td><input type="text" name="item_type" value="<?php echo $items[4];?>" ></td>
</tr>

</table>
<table summary="Submit Button" cellpadding="0" cellspacing="0">
<tbody><tr>
<th> </th>
<td>
<button class="submit" type="submit" name="submit">修改</button>
<button class="reset" type="button"  onClick="javascript:history.back()" name="back">返回</button>
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