<html>
<head>
<title>��ӭҳ��</title>
<LINK href="css/css.css" type=text/css rel=stylesheet>
</head>
<body>
<div class="mainbox threadlist">
 <div class="headactions">
</div>
<h1>��ӭ��¼</h1>
	<table class="portalbox"  cellpadding="0" cellspacing="1" >
 <thead class="separation">	
		<tr>
		   <td>�û���</td>
		    <td>�Ա�</td>
		    <td>email</td>
		    <td>�绰</td>
		    <td>��ַ</td>
		    <td>�༭</td>		  					
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
		<td> <a href="userController.php?flag=edit&id=<?php echo $userList['user_id']; ?>">�޸�
		 <a href="userController.php?flag=delete&id=<?php echo $userList['user_id']; ?>">ɾ��</td>			
		</tr>
		<?php } ?>	
	</table>
</body>
</html>