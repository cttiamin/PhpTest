<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>欢迎页面</title>
</head>
<body>
<table width="495" border="1">
  <tr>
    <td width="67">用户名</td>
    <td width="56">性别</td>
    <td width="82">email</td>
    <td width="82">电话</td>
    <td width="82">地址</td>
    <td width="86">编辑</td>
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
	<a href="userController.php?flag=edit&id=<?php echo $userList['user_id'];?>">修改</a>
	&nbsp;
	  <a href="userController.php?flag=delete&id=<?php echo $userList['user_id'];?>">删除</a>
	  </td>
  </tr>
  <?php }?>

</table>

</body>
</html>
