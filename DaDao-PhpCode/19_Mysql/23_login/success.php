<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ӭҳ��</title>
</head>
<body>
<table width="495" border="1">
  <tr>
    <td width="67">�û���</td>
    <td width="56">�Ա�</td>
    <td width="82">email</td>
    <td width="82">�绰</td>
    <td width="82">��ַ</td>
    <td width="86">�༭</td>
  </tr>
  <?php
  for($i=0;$i<count($user);$i++){
  	$userList=array();
	$userList=$user[$i];
  ?>
  <tr>
    <td><?php echo $userList['user_name'];?></td>
    <td><?php echo $userList['user_sex'];?></td>
    <td><?php echo $userList['user_email'];?></td>
    <td><?php echo $userList['user_phone'];?></td>
    <td><?php echo $userList['user_address'];?></td>
    <td>
	<a href="userController.php?flag=edit&id=<?php echo $userList['user_id'];?>">�޸�</a>
	&nbsp;
	  <a href="userController.php?flag=delete&id=<?php echo $userList['user_id'];?>">ɾ��</a>
	  </td>
  </tr>
  <?php }?>

</table>

</body>
</html>
