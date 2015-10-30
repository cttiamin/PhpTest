<?php require_once('adminqx.php'); ?>

<?php require_once('../include/mysqlclass.php'); ?>
<?php
$mycon=new mysql();
if(isset($_POST['Submit'])){
	$u_name=$_POST['u_name'];
	$u_xinming=$_POST['u_xinming'];
	$u_pwd=$_POST['u_pwd'];
	$sqlstr="insert into admin_user(u_name,u_xinming,u_pwd,u_qx)values('$u_name','$u_xinming','$u_pwd',9)";
	mysql_query($sqlstr);
   echo"<script language='javascript'>";
   echo"location='admin_user.php'";
   echo"</script>";
}
if(isset($_GET['edit'])){
	$u_id=$_GET['edit'];
	$query=$mycon->selectedit("admin_user","where u_id=$u_id");
	$rs_edit=mysql_fetch_array($query);
}
if(isset($_POST['u_id'])){
   $u_id=$_POST['u_id'];
   $u_xinming=$_POST['u_xinming'];
   $u_pwd=$_POST['u_pwd'];
   $sqlstr="update admin_user set u_xinming='$u_xinming',u_pwd='$u_pwd' where u_id=$u_id";
   mysql_query($sqlstr);
   echo"<script language='javascript'>";
   echo"location='admin_user.php'";
   echo"</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
.STYLE1 {color: #FFFFFF}
-->
</style></head>

<body>
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td>当前位置:用户管理 | <a href="admin_user.php?add=1">[添加]</a></td>
  </tr>
  <tr>
    <td><hr></td>
  </tr>
</table>
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td width="13%" align="center" bgcolor="#6699FF"><span class="STYLE1">用户名</span></td>
    <td width="17%" align="center" bgcolor="#6699FF"><span class="STYLE1">用户姓名</span></td>
    <td width="16%" align="center" bgcolor="#6699FF"><span class="STYLE1">最后登录日期</span></td>
    <td width="17%" align="center" bgcolor="#6699FF"><span class="STYLE1">最后登录IP</span></td>
    <td width="16%" align="center" bgcolor="#6699FF"><span class="STYLE1">登录次数</span></td>
    <td width="9%" align="center" bgcolor="#6699FF"><span class="STYLE1">操作</span></td>
  </tr>
  
  <?php
  $query=$mycon->selectedit("admin_user","order by u_id desc ");
  while($rs=mysql_fetch_array($query)){
  ?>
  <tr>
    <td align="center"><a href="admin_user.php?edit=<?php echo $rs['u_id'];?>"><?php echo $rs['u_name'];?></a></td>
    <td align="center"><?php echo $rs['u_xinming'];?></td>
    
    <td align="center"><?php echo $rs['u_lasttime'];?></td>
    <td align="center"><?php echo $rs['u_lastip'];?></td>
    <td align="center"><?php echo $rs['u_count'];?></td>
    <td align="center">删除</td>
  </tr>
  <?php
  }
  ?>
</table>
<p>

</p>
<p>  <?php
if(isset($_GET['add'])){
?>
  <script language="javascript">
 function ckfrm(){
	 if(document.form1.u_name.value.length<4){
	 	alert("用户登录名不能为空");
		document.form1.u_name.focus();
		return false;
	 }
	 if(document.form1.u_pwd.value.length<4){
	 	alert("用户密码不能为空");
		document.form1.u_pwd.focus();
		return false;
	 }
 	 if(document.form1.u_pwd.value!=document.form1.u_pwd2.value){
	 	alert("两次输入的密码不同");
		document.form1.u_pwd.focus();
		return false;
	 }
}
  </script>
</p>
<form id="form1" name="form1" method="post" action="" onSubmit="return ckfrm();">
  <table width="90%" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="34%" align="right" bgcolor="#CADBFF">用 户登录名:</td>
      <td width="66%"><input name="u_name" type="text" id="u_name" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CADBFF">用 户 姓 名:</td>
      <td><input name="u_xinming" type="text" id="u_xinming" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CADBFF">登 录 密 码:</td>
      <td><input name="u_pwd" type="text" id="u_pwd" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CADBFF">确 认 密 码:</td>
      <td><input name="u_pwd2" type="text" id="u_pwd2" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CADBFF">&nbsp;</td>
      <td><input type="submit" name="Submit" value="提交" /></td>
    </tr>
  </table>
</form>
<p>
  <?php
}
?>
</p>
<p>&nbsp;</p>
<?php
if(isset($_GET['edit'])){
?>
<form id="form2" name="form2" method="post" action="">
  <table width="90%" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="34%" align="right" bgcolor="#CADBFF">用 户登录名:</td>
      <td width="66%"><input name="u_id" type="hidden" id="u_id" value="<?php echo $rs_edit['u_id'];?>" /><?php echo $rs_edit['u_name'];?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CADBFF">用 户 姓 名:</td>
      <td><input name="u_xinming" type="text" id="u_xinming" value="<?php echo $rs_edit['u_name'];?>" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CADBFF">登 录 密 码:</td>
      <td><input name="u_pwd" type="password" id="u_pwd" value="<?php echo $rs_edit['u_name'];?>" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CADBFF">确 认 密 码:</td>
      <td><input name="u_pwd2" type="password" id="u_pwd2" value="<?php echo $rs_edit['u_name'];?>" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CADBFF">&nbsp;</td>
      <td><input type="submit" name="Submit2" value="提交" /></td>
    </tr>
  </table>
</form>
<?php
}
?>
<p>&nbsp;</p>
</body>
</html>
