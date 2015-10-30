<?php require_once('adminqx.php'); ?>
<?php require_once('../include/mysqlclass.php'); ?>
<?php
  $mycon=new mysql();
  
  if(isset($_GET['edit'])){
	  $myquery=$mycon->selectedit("dept"," where id=1 ");
	  $rs=mysql_fetch_array($myquery);
  }
  if(isset($_POST['Submit'])){
    $webtitle=$_POST['webtitle'];
    $gsname=$_POST['gsname'];
    $keywd=$_POST['keywd'];
    $address=$_POST['address'];
    $zip=$_POST['zip'];
    $tel=$_POST['tel'];
    $fax=$_POST['fax'];
    $lxr=$_POST['lxr'];
    $icp=$_POST['icp'];
    $str="webtitle='$webtitle',gsname='$gsname',keywd='$keywd',address='$address',zip='$zip',tel='$tel',fax='$fax',lxr='$lxr',icp='$icp'";
	//echo $str;
	//exit();
	 $mycon->update("dept",$str," where id=1");
	 $mycon->jscript("dept.php","修改成功");
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
<table width="91%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td>当前位置:网站信息管理 <a href="dept.php?edit=1">[修改信息]</a></td>
  </tr>
  <tr>
    <td><hr /></td>
  </tr>
</table>
<table width="90%" border="1" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td width="20%" align="center" bgcolor="#3399FF"><span class="STYLE1">网站标题</span></td>
    <td width="30%" align="center" bgcolor="#3399FF"><span class="STYLE1">公司名称</span></td>
    <td width="17%" align="center" bgcolor="#3399FF"><span class="STYLE1">联系电话</span></td>
    <td width="17%" align="center" bgcolor="#3399FF"><span class="STYLE1">联系人</span></td>
    <td width="16%" align="center" bgcolor="#3399FF"><span class="STYLE1">ICP备案号</span></td>
  </tr>
  <?php
  $query=$mycon->selectpg("dept","id ",20,1," where id=1");
  while($row=mysql_fetch_array($query)){
  ?>
  <tr>
    <td height="30" align="center"><?php echo $row['webtitle'];?></td>
    <td align="center"><?php echo $row['gsname'];?></td>
    <td align="center"><?php echo $row['tel'];?></td>
    <td align="center"><?php echo $row['lxr'];?></td>
    <td align="center"><?php echo $row['icp'];?></td>
  </tr>
  <?php
  }
  ?>
</table>
<?php
if(isset($_GET['edit'])){
?>
<table width="91%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
	<form id="form1" name="form1" method="post" action="">
      <table width="90%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#BBDFE1">
        <tr>
          <td width="29%" align="right" bgcolor="#3366FF"><span class="STYLE1">网站名称:</span></td>
          <td width="71%"><label>
            <input name="webtitle" type="text" id="webtitle" value="<?php echo $rs['webtitle'];?>" size="50" />
          </label></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1">公司名称:</span></td>
          <td><input name="gsname" type="text" id="gsname" value="<?php echo $rs['gsname'];?>" size="50" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1">通信地址:</span></td>
          <td><input name="address" type="text" id="address" value="<?php echo $rs['address'];?>" size="50" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1">邮政编码:</span></td>
          <td><input name="zip" type="text" id="zip" value="<?php echo $rs['zip'];?>" size="50" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1">联系电话:</span></td>
          <td><input name="tel" type="text" id="tel" value="<?php echo $rs['tel'];?>" size="50" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1">传&nbsp;&nbsp;&nbsp;&nbsp;真:</span></td>
          <td><input name="fax" type="text" id="fax" value="<?php echo $rs['fax'];?>" size="50" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1">联 系 人:</span></td>
          <td><input name="lxr" type="text" id="lxr" value="<?php echo $rs['lxr'];?>" size="50" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1">ICP备 案:</span></td>
          <td><input name="icp" type="text" id="icp" value="<?php echo $rs['icp'];?>" size="50" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1">推广关键字:</span></td>
          <td><textarea name="keywd" cols="48" rows="5" id="keywd"><?php echo $rs['keywd'];?></textarea></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1"></span></td>
          <td>&nbsp;&nbsp;
            <input type="submit" name="Submit" value="提交" /> &nbsp;&nbsp;
            <input type="reset" name="Submit2" value="重置" /></td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
  <?php
  }
  ?>

</body>
</html>
