<html>
	<head>
		<title>商品清单</title>
		 <LINK href="css/reg.css" type=text/css rel=stylesheet>
	</head>
	<body>
		<form action="myCart.php" method="post">
		<div class="mainbox formbox">		
<h1>选购商品</h1>
<table  cellpadding="0" cellspacing="0">
<thead>
<tr>
<th>请挑选商品</th>
<td> </td>
</tr>
</thead>
		<tr>		
		<th><input type="checkbox" name="item[]" value="0"></th>
		<th>照相机</th>
		</tr> 
		<tr>		
		<th><input type="checkbox" name="item[]" value="1"></th>
		<th>手机</th>
		</tr>
		<tr>
		<th><input type="checkbox" name="item[]" value="2"></th>
		<th>笔记本电脑</th>
		</tr>
		<tr>
		<th><input type="checkbox" name="item[]" value="3"></th>
		<th>羽绒服</th>
		</tr>
		<tr>
		<th><input type="checkbox" name="item[]" value="4"></th>
		<th>皮鞋</th>
		</tr>	
		</table>
<table summary="Submit Button" cellpadding="0" cellspacing="0">
<tr>
<th> </th>
<td>
<button class="submit" type="submit" name="submit">加入购物车</button>
</td>
</table>
		</div>				
		</form>
	</body>
</html>