<?php require_once('adminqx.php'); ?>
<?php require_once('../include/mysqlclass.php'); ?>
<?php

if(isset($_GET['class_id'])){
$articleadd=new mysql();
$classid=$_GET['class_id'];
$query=$articleadd->selectedit("n_class"," where classid=$classid");
$rs_class=mysql_fetch_array($query);
}else{
echo"<script language=\"javascript\">";
echo "alert(\"非法操作\");";
echo "location='index.php';";
echo "</script>";
}

if(isset($_POST['Submit'])){
$class_id=$_POST['class_id'];
$a_state=$_POST['a_state'];
$flag=$_POST['flag'];
$a_title=$_POST['a_title'];
$a_content=$_POST['a_content'];
$cols="class_id,a_title,a_state,flag,a_content";
$values="$class_id,'$a_title',$a_state,$flag,'$a_content'";
if(isset($_POST['a_content2'])){
	$a_content2=$_POST['a_content2'];
	$cols.=",a_content2";
	$values.=",'$a_content2'"
}
if(isset($_POST['a_url'])){
	$a_url=$_POST['a_url'];
	$cols.=",a_url";
	$values.=",'$a_url'"
}
if(isset($_POST['a_pic'])){
	$a_pic=$_POST['a_pic'];
	$cols.=",a_pic";
	$values.=",'$a_pic'"
}

$articleadd->insert("n_article",,);
$articleadd->jscript("article.php?classid=$class_id",'文章添加成功');

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
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="90%" border="1" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td width="107" align="right" bgcolor="#ACDEFF">所属类别:</td>
      <td width="727"><label>
	  <?php
	  if(isset($_GET['class_id'])){
	  ?>
	  <input name="class_id" type="hidden" id="class_id" value="<?php echo $_GET['class_id']; ?>" />
	  <?php
	   $querybig=$articleadd->selectall("n_class"," classid desc","where classid=$classid");
	   $rsbig=mysql_fetch_array($querybig);
	   echo $rsbig['class_title'];
	  }else{
	  ?>
			<select name="class_id" id="class_id">
			<?php
			$query=$articleadd->selectall("n_class","classid desc","where flag=0");
			while($rs=mysql_fetch_array($query)){
			?>
			  <option value="<?php echo $rs['classid'];?>"><?php echo $rs['class_title'];?></option>
			<?php
			}
			?>
			</select>
		<?php
		}
		?>
      </label></td>
    </tr>
    <tr>
      <td height="30" align="right" bgcolor="#ACDEFF">文章标题:</td>
      <td><input name="a_title" type="text" id="a_title" size="47" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">是否显示:</td>
      <td><input name="a_state" type="radio" value="1" checked="checked" />
        显示 
        <input type="radio" name="a_state" value="0" />
        不显示</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">是否推荐:</td>
      <td><input type="radio" name="flag" value="1" />
推荐
  <input name="flag" type="radio" value="0" checked="checked" /> 
  不推荐</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">链接网址:</td>
      <td><input name="a_url" type="text" id="a_url" size="47" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">图&nbsp;&nbsp;&nbsp;&nbsp;片:</td>
      <td><input name="a_pic" type="text" id="a_pic" size="42" />
        <label>
        <input type="button" onclick="window.open('../include/upfile.php?id=a_pic','mywin','toolbar=no,location=no,scrollbars=yes,width=550,height=200,left=120,top=70')" name="Submit2" value="上传图片" />
        <input type="button" onclick="window.open('/include/selectpic.php?id=a_pic','mywin','toolbar=no,location=no,scrollbars=yes,width=750,height=600,left=120,top=70')" name="Submit22" value="浏览图片" />
        </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">内容简介:</td>
      <td><textarea name="a_content2" cols="45" rows="4" id="a_content2"></textarea></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">文章内容:</td>
      <td><input name="a_content" type="hidden" id="a_content" value="" size="45" />
	  <IFRAME ID="eWebEditor1" SRC="xcEditor/ewebeditor.htm?id=a_content&style=popup" FRAMEBORDER="0" SCROLLING="no" WIDTH="550" HEIGHT="350"></IFRAME>	  </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="提交" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
$articleadd->close();
?>