<?php 
session_start();
require_once('../include/mysqlclass.php'); 
?>

<?php

if(isset($_SESSION['u_name'])){
	$u_name=$_SESSION['u_name'];
	$u_qx=$_SESSION['u_qx'];
}else{
	$u_name='';
	$u_qx=0;
}
$leftmenu=new mysql();
$i=1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="0">
<style>
body,table,tr
{
	font-size:12px;
	font-family:宋体;
	line-height:16px;
}

A.parent:link {font:13px;text-decoration:none;color: #000000}
A.parent:visited {font-size:13px;text-decoration:none;color: #000000}
A.parent:hover {font-size:13px;text-decoration:underline;color: #ff6600}

A:link {color: #000066}
A:visited {color: #000066}
A:hover {color: #ff3300}
body {
	background-color: #B7D3FC;
}
</style>

<script language="javascript">
	var imgOpen = new Image();
	var imgClose = new Image();
	imgOpen.src = "images/open.gif"
	imgClose.src = "images/close.gif"

	function expand(el)
	{
		childObj = document.getElementById("child" + el);
		imgObj = document.getElementById("img" + el);

		if (childObj.style.display == 'none')
		{
			childObj.style.display = 'block';
			imgObj.src = imgOpen.src;
		}
		else
		{
			childObj.style.display = 'none';
			imgObj.src = imgClose.src;
		}
	}
</script>
</head>
<body topmargin="0" leftmargin="0" left bottom no-repeat;">

<table width="158" border="1" cellspacing="0" cellpadding="0" align="center">
	<tr height="5">
		<td colspan="2"></td>
	</tr>

	

	<tr>
	  <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="31" align="center" background="images/admin_bg_1.gif"><a href="/" target="_blank">网站首页</a> | <a href="loginout.php" target="_top">退出登录</a> </td>
        </tr>
        <tr>
          <td bgcolor="#CCCCCC">&nbsp;</td>
        </tr>
      </table></td>
  </tr>
  <tr>
		<td valign="top">
				<div id="parent<?PHP echo $i;?>">
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="images/admin_left_2.gif">
						<tr height="20">
							<td width="21" height="25" align="center"><a href="#" onClick="expand(<?PHP echo $i;?>)"><img src="images/close.gif" name="img<?PHP echo $i;?>" width="9" height="16" border="0" id="img<?PHP echo $i;?>"></a></td>
							<td width="158" height="25"><a href="#" class="parent" onClick="expand(<?PHP echo $i;?>)">基本栏目管理</a>							</td>
						</tr>
						<tr>
							<td height="10" colspan="2" align="center" bgcolor="#F6F8FE">							</td>
						</tr>
				  </table>
				</div>
				<div id="child<?PHP echo $i;?>" style="display:none;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
					<?php
					$class_small=$leftmenu->selectall("n_class","sortnum asc,classid desc"," where b_id=0 and flag=0 ");
					while($rs_a=mysql_fetch_array($class_small)){
					?>
							<tr>
								<td width="40"></td>
								<td><a href="article.php?classid=<?PHP echo $rs_a['classid'];?>"  target="main"><?PHP echo $rs_a['class_title'];?></a></td>
							</tr>
					 <?php
					 }
					 ?>
					</table>
				</div>
	</td>
	</tr>
<?php
  $i=$i+1;
  ?>

<?php
$query=$leftmenu->selectall("n_class","sortnum asc,classid desc"," where b_id=0 and flag=1");
while($rsleft=mysql_fetch_array($query)){
 ?>	<tr>
		<td valign="top">
				<div id="parent<?PHP echo $i;?>">
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="images/admin_left_2.gif">
						<tr height="20">
							<td width="21" height="25" align="center"><a href="#" onClick="expand(<?PHP echo $i;?>)"><img src="images/close.gif" name="img<?PHP echo $i;?>" width="9" height="16" border="0" id="img<?PHP echo $i;?>"></a></td>
							<td width="158" height="25"><a href="#" class="parent" onClick="expand(<?PHP echo $i;?>)"><?PHP echo $rsleft['class_title'];?></a>							</td>
						</tr>
						<tr>
							<td height="10" colspan="2" align="center" bgcolor="#F6F8FE">							</td>
						</tr>
				  </table>
				</div>
				<div id="child<?PHP echo $i;?>" style="display:none;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
					<?php
					$classid=$rsleft['classid'];
					$smallclass=$leftmenu->selectall("n_class","sortnum asc,classid desc"," where b_id=$classid");
					while($rs_small=mysql_fetch_array($smallclass)){
					?>
							<tr>
								<td width="40"></td>
								<td><a href="article.php?classid=<?PHP echo $rs_small['classid'];?>"  target="main"><?PHP echo $rs_small['class_title'];?></a></td>
							</tr>
					 <?php
					 }
					 ?>
						<?PHP
							if($u_name=="xc_huang"&&$u_qx=10){
						?>
							<tr>
								<td width="40"></td>
								<td><a href="class_small.php?classid=<?PHP echo $rsleft['classid'];?>"  target="main">分类管理</a></td>
							</tr>
						<?php
							}
						?>
					</table>
				</div>
	</td>
	</tr>
	<?php
		 $i=$i+1;
		}
	?>	
	<tr>
		<td valign="top">
				<div id="parent<?PHP echo $i;?>">
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="images/admin_left_2.gif">
						<tr height="20">
							<td width="21" height="25" align="center"><a href="#" onClick="expand(<?PHP echo $i;?>)"><img src="images/close.gif" name="img<?PHP echo $i;?>" width="9" height="16" border="0" id="img<?PHP echo $i;?>"></a></td>
							<td width="158" height="25"><a href="#" class="parent" onClick="expand(<?PHP echo $i;?>)">留言反馈管理</a>							</td>
						</tr>
						<tr>
							<td height="10" colspan="2" align="center" bgcolor="#F6F8FE">							</td>
						</tr>
				  </table>
				</div>
				<div id="child<?PHP echo $i;?>" style="display:none;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
							<tr>
								<td width="40"></td>
								<td><a href="book.php"  target="main">用户留言管理</a></td>
							</tr>
					</table>
				</div>
	</td>
	</tr>
	
	<tr>
		<td valign="top">
		<?php $i=$i+1;?>
				<div id="parent<?PHP echo $i;?>">
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="images/admin_left_2.gif">
						<tr height="20">
							<td width="21" height="25" align="center"><a href="#" onClick="expand(<?PHP echo $i;?>)"><img src="images/close.gif" name="img<?PHP echo $i;?>" width="9" height="16" border="0" id="img<?PHP echo $i;?>"></a></td>
							<td width="158" height="25"><a href="#" class="parent" onClick="expand(<?PHP echo $i;?>)">系统管理</a>							</td>
						</tr>
						<tr>
							<td height="10" colspan="2" align="center" bgcolor="#F6F8FE">							</td>
						</tr>
				  </table>
				</div>
				<div id="child<?PHP echo $i;?>" style="display:none;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
							<tr>
								<td width="40"></td>
								<td><a href="admin_user.php"  target="main">操作人员管理</a></td>
							</tr>
					
							<tr>
								<td width="40"></td>
								<td><a href="dept.php"  target="main">网站系统管理</a></td>
							</tr>
						<?PHP
							if($u_name=="xc_huang"&&$u_qx=10){
						?>
							<tr>
								<td width="40"></td>
								<td><a href="class_big.php"  target="main">栏目管理</a></td>
							</tr>
						<?php
						   }
						 ?>
					</table>
				</div>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="5" align="center">&nbsp;</td>
        </tr>
        <tr>
          <td align="center" bgcolor="#CCCCCC"><p>网络巨人工作室<br />
          技术支持QQ:59125994</p>
          </td>
        </tr>
      </table>
	</td>
	</tr>
</table>

</body>
</html>
<?php
$leftmenu->close();
?>