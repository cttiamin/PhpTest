<html>
<head>
<title>欢迎页面</title>
<LINK href="css/css.css" type=text/css rel=stylesheet>
</head>
<body>
<div class="mainbox threadlist">
 <div class="headactions">
</div>
<h1>欢迎登录</h1>
	<table class="portalbox"  cellpadding="0" cellspacing="1" >
 <thead class="separation">	
		<tr>
		   <td>用户名</td>
		    <td>性别</td>
		    <td>email</td>
		    <td>电话</td>
		    <td>地址</td>
		    <td>编辑</td>		  					
		</tr>
		</thead>
	</div>	
		<?php
		for ($i=0;$i<count($user);$i++){
			$userList=array();
			$userList=$user[$i];				
		?> 
		<tr>
		<td> <?php echo $userList['user_name']; ?></td>
		<td> <?php echo $userList['user_sex']; ?></td>
		<td> <?php echo $userList['user_email']; ?></td>
		<td> <?php echo $userList['user_phone']; ?></td>
		<td> <?php echo $userList['user_address']; ?></td>
		<td> <a href="userController.php?flag=edit&id=<?php echo $userList['user_id']; ?>">修改
		 <a href="userController.php?flag=delete&id=<?php echo $userList['user_id']; ?>">删除</td>			
		</tr>
		<?php } ?>	
	</table>
</body>
</html>