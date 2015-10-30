<?php
session_start();
$items=array("照相机","手机","笔记本电脑","羽绒服","皮鞋");//定义一个存储商品的数组
$itemCount=$_SESSION["itemCount"];//从会话中获得商品数量
if ($itemCount==null){
	$itemCount=0;
}
$itemsSelected=$_POST['item'];// 取得表单上选中的商品
if (isset($itemsSelected)){// 判断是否选中商品
	for ($i=0;$i<count($itemsSelected);$i++){
		$itemCount=$itemCount+1;
		$_SESSION["itemCount"]=$itemCount;// 将商品数量放入会话中
		$_SESSION["itemList"][$itemCount]=$itemsSelected[$i];//将选中的商品放入会话中
	}
}
?>
<html>
<head>
<title>购物车</title>
<LINK href="css/css.css" type=text/css rel=stylesheet>
</head>
<body>
<div class="mainbox threadlist">
 <div class="headactions">
</div>
<h1>购物车</h1>
 <table class="portalbox"  cellpadding="0" cellspacing="1" >
 <thead class="separation">

<tr>
<td>商品名称</td>
</tr>
</thead>
	</div>
<?php
for ($i=0;$i<$itemCount;$i++){
		$item=$_SESSION["itemList"][$i+1];
?>
<tr>
<td><?php echo $items[$item] ;// 输出购物车中的商品 ?></td>
</tr>
<?php		
	}
?>
<tr>
<td>您购物车中共有<?php echo $itemCount;?>件商品</td>
</tr>
</table>
<center><a href="showItemInfo.php">继续购物</a></center>
</body>
</html>
