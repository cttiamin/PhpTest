<?php require_once('adminqx.php'); ?>
<?php require_once('../include/mysqlclass.php'); ?>
<?php
$article_edit=new mysql();
if(isset($_GET['id'])){
	$a_id=$_GET['id'];
	//$classid=$_GET['classid'];
	$query=$article_edit->selectedit("n_article","where a_id=$a_id");
	$row=mysql_fetch_array($query);
	$classid=$row['class_id'];
	$classqx=$article_edit->selectedit("n_class","where classid=".$classid);
	$rs_class=mysql_fetch_array($classqx);

}else{
$article_edit->jscript("index.php","参数不对");
}
if(isset($_POST['Submit'])){
	$a_id=$_POST['a_id'];
	$class_id=$_POST['class_id'];
	$a_title=$_POST['a_title'];
	$flag=$_POST['flag'];
	$a_state=$_POST['a_state'];
	$sqlstr="a_title='$a_title',class_id=$class_id,flag=$flag,a_state=$a_state,uptime=now()";
	if(isset($_POST['a_url'])){
		$a_url=$_POST['a_url'];
		$sqlstr.=",a_url='$a_url'";
	}
	if(isset($_POST['a_content2'])){
		$a_content2=$_POST['a_content2'];
		$sqlstr.=",a_content2='$a_content2'";
	}
	if(isset($_POST['a_content'])){
	$a_content=$_POST['a_content'];
	$sqlstr.=",a_content='$a_content'";
	}
	//echo $sqlstr;
	//exit();
	$article_edit->update("n_article",$sqlstr,"where a_id=$a_id");
	echo"<script language='javascript'>";
	echo"location='article.php?classid=$class_id';";
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
-->
</style></head>

<body>
<script language="javascript">
	function ckfrm(){
	  if(document.form1.a_title.value.length<2){
	  alert("标题不能为空");
	  document.form1.a_title.focus();
	  return false;
	  }
	}
</script>
<form id="form1" name="form1" method="post" action="" onSubmit="return ckfrm();">
  <table width="90%" border="1" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td width="124" align="right" bgcolor="#ACDEFF">所属类别:</td>
      <td width="702"><label>

  <input name="class_id" type="hidden" id="class_id" value="<?php echo $classid;?>" /><?php echo $rs_class['class_title'];?>


      <input name="a_id" type="hidden" id="a_id" value="<?php echo $a_id;?>" />
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">标&nbsp;&nbsp;&nbsp;&nbsp;题:</td>
      <td>
	<?php 
	if($rs_class['is_link']==0|$_SESSION['u_name']=="xc_huang"){
	?>
	  
	  <input name="a_title" type="text" id="a_title" value="<?php echo $row['a_title'];?>" size="70" />
	  <?php
	  }else{
	  ?>
	  	  <input name="a_title" type="hidden" id="a_title" value="<?php echo $row['a_title'];?>" size="70" /><?php echo $row['a_title'];?>
	  <?php
	  }
	  ?>
	  </td>
    </tr>
	<tr>
      <td align="right" bgcolor="#ACDEFF">是否推荐:</td>
      <td><input type="radio" name="flag" value="0" <?php if($row['flag']==0){
		echo "checked=checked";} 
		?> /> 
		  不推荐	  
		    <input type="radio" name="flag" value="1" <?php if($row['flag']==1){
		echo "checked=checked";} 
		?>/>
推荐
<input type="radio" name="flag" value="2" <?php if($row['flag']==2){
		echo "checked=checked";} 
		?>/> 
重点推荐
</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">是否显示:</td>
      <td><input type="radio" name="a_state" value="1" <?php if($row['a_state']==1){
		echo "checked=checked";} 
		?> />
        显示 
        <input type="radio" name="a_state" value="0"  <?php if($row['a_state']==0){
		echo "checked=checked";} 
		?>/>
        不显示</td>
    </tr>
	<?php 
	if($rs_class['is_link']==0){
	?>
    <tr>
      <td align="right" bgcolor="#ACDEFF">链接网址:</td>
      <td><input name="a_url" type="text" id="a_url" value="<?php echo $row['a_url'];?>" size="70" /></td>
    </tr>
 	<?php 
	}
	?>
	<?php 
	if($rs_class['is_jian']==0){
	?>
    <tr>
      <td align="right" bgcolor="#ACDEFF">简单介绍:</td>
      <td><textarea name="a_content2" cols="70" id="a_content2"><?php echo $row['a_content2'];?></textarea></td>
    </tr>
  	<?php 
	}
	?>
	<?php 
	if($rs_class['is_neirong']==0){
	?>
   <tr>
      <td align="right" bgcolor="#ACDEFF">详细内容:</td>
      <td><input name="a_content" type="hidden" id="a_content" value="<?php echo htmlspecialchars($row['a_content']);?>" size="45" />
	  <IFRAME ID="eWebEditor1" SRC="xcEditor/ewebeditor.htm?id=a_content&style=popup" FRAMEBORDER="0" SCROLLING="no" WIDTH="550" HEIGHT="350"></IFRAME>
	  </td>
    </tr>
  	<?php 
	}
	?>
    <tr>
      <td align="right" bgcolor="#ACDEFF">&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="提交" />
      </label></td>
    </tr>
  </table>
</form>
<script language="javascript">
  function abc(){
  aaa.innerHTML="<img src="+document.form1.a_pic.value+" width=100>";
  }
</script>
</body>
</html>
<?php
$article_edit->close();
?>