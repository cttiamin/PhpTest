<?php require_once('adminqx.php'); ?>
<?php require_once('../include/mysqlclass.php'); ?>
<?php

if(isset($_GET['class_id'])){
$articleadd=new mysql();
$classid=$_GET['class_id'];
$query=$articleadd->selectedit("n_class"," where classid=$classid");
$rs_class=mysql_fetch_array($query);
$class_title=$rs_class['class_title'];
}else{
echo"<script language=\"javascript\">";
echo "alert(\"�Ƿ�����\");";
echo "location='index.php';";
echo "</script>";
}

if(isset($_POST['Submit'])){
$class_id=$_POST['class_id'];
$a_state=$_POST['a_state'];
$flag=$_POST['flag'];
$a_title=$_POST['a_title'];
$a_title=str_replace("\"","��",$a_title);
$cols="class_id,a_title,a_state,flag,createtime";
$values="$class_id,'$a_title',$a_state,$flag,now()";
if(isset($_POST['a_content'])){
	$a_content=$_POST['a_content'];
	$cols.=",a_content";
	$values.=",'$a_content'";
}

if(isset($_POST['a_content2'])){
	$a_content2=$_POST['a_content2'];
	$cols.=",a_content2";
	$values.=",'$a_content2'";
}
if(isset($_POST['a_url'])){
	$a_url=$_POST['a_url'];
	$cols.=",a_url";
	$values.=",'$a_url'";
}
if(isset($_POST['a_pic'])){
	$a_pic=$_POST['a_pic'];
	$cols.=",a_pic";
	$values.=",'$a_pic'";
}
//echo $cols."<br>".$values;
$articleadd->insert("n_article",$cols,$values);
echo"<script language='javascript'>";
echo"location='article.php?classid=$class_id';";
echo"</script>";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
-->
</style></head>

<body>
<script language="javascript">
	function ckfrm(){
	  if(document.form1.a_title.value.length<2){
	  alert("���ⲻ��Ϊ��");
	  document.form1.a_title.focus();
	  return false;
	  }
	}
</script>
<form id="form1" name="form1" method="post" action="" onsubmit="return ckfrm();">
  <table width="90%" border="1" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td width="107" align="right" bgcolor="#ACDEFF">�������:</td>
      <td width="727"><label>
      <input name="class_id" type="hidden" id="class_id" value="<?php echo $_GET['class_id']; ?>" />
      <?php
	   echo $class_title;
	  ?>
</label></td>
    </tr>
    <tr>
      <td height="30" align="right" bgcolor="#ACDEFF">��&nbsp;&nbsp;&nbsp;&nbsp;��:</td>
      <td>

	  <input name="a_title" type="text" id="a_title" size="47" />	  </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">�Ƿ���ʾ:</td>
      <td><input name="a_state" type="radio" value="1" checked="checked" />
        ��ʾ 
        <input type="radio" name="a_state" value="0" />
        ����ʾ</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">�Ƿ��Ƽ�:</td>
      <td><input name="flag" type="radio" value="0" checked="checked" /> 
  ���Ƽ�
    <input name="flag" type="radio" value="1" checked="checked" />
�Ƽ�
  <input name="flag" type="radio" value="2" /> 
  �ص��Ƽ�</td>
    </tr>
	<?php 
	if($rs_class['is_link']==0){
	?>
    <tr>
      <td align="right" bgcolor="#ACDEFF">������ַ:</td>
      <td><input name="a_url" type="text" id="a_url" size="47" /></td>
    </tr>
 	<?php 
	}
	?>
	<?php 
	if($rs_class['is_pic']==0){
	?>
    <tr>
      <td align="right" bgcolor="#ACDEFF">ͼ&nbsp;&nbsp;&nbsp;&nbsp;Ƭ:</td>
      <td><input name="a_pic" type="text" id="a_pic" size="42" />
        <label>
        <input type="button" onclick="window.open('../include/upfile.php?id=a_pic','mywin','toolbar=no,location=no,scrollbars=yes,width=550,height=200,left=120,top=70')" name="Submit2" value="�ϴ�ͼƬ" />
        <input type="button" onclick="window.open('../include/selectpic.php?id=a_pic','mywin','toolbar=no,location=no,scrollbars=yes,width=750,height=600,left=120,top=70')" name="Submit22" value="���ͼƬ" />
        </label></td>
    </tr>
	<?php 
	}
	?>
<?php 
	if($rs_class['is_jian']==0){
	?>

    <tr>
      <td align="right" bgcolor="#ACDEFF">�򵥽���:</td>
      <td><textarea name="a_content2" cols="45" rows="4" id="a_content2"></textarea></td>
    </tr>
	<?php
	}
	?>
<?php 
	if($rs_class['is_neirong']==0){
	?>
    <tr>
      <td align="right" bgcolor="#ACDEFF">��ϸ����:</td>
      <td><input name="a_content" type="hidden" id="a_content" value="" size="45" />
	  <IFRAME ID="eWebEditor1" SRC="xcEditor/ewebeditor.htm?id=a_content&style=popup" FRAMEBORDER="0" SCROLLING="no" WIDTH="550" HEIGHT="350"></IFRAME>	  </td>
    </tr>
	<?php
	}
	?>
    <tr>
      <td align="right" bgcolor="#ACDEFF">&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="�ύ" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
$articleadd->close();
?>